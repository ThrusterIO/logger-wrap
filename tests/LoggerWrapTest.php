<?php

declare(strict_types=1);

namespace Thruster\LoggerWrap\Tests;

use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use ReflectionException;
use Thruster\LoggerWrap\LoggerWrap;

/**
 * Class LoggerWrapTest.
 *
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class LoggerWrapTest extends TestCase
{
    public function listOfMethods(): array
    {
        $out = [];

        $out[] = ['emergency', ['foo', ['foo' => 'bar']]];
        $out[] = ['alert', ['foo', ['foo' => 'bar']]];
        $out[] = ['critical', ['foo', ['foo' => 'bar']]];
        $out[] = ['error', ['foo', ['foo' => 'bar']]];
        $out[] = ['warning', ['foo', ['foo' => 'bar']]];
        $out[] = ['notice', ['foo', ['foo' => 'bar']]];
        $out[] = ['info', ['foo', ['foo' => 'bar']]];
        $out[] = ['debug', ['foo', ['foo' => 'bar']]];
        $out[] = ['log', ['info', 'foo', ['foo' => 'bar']]];

        return $out;
    }

    /**
     * @param string $methodName
     * @param array  $arguments
     *
     * @dataProvider listOfMethods
     *
     * @throws ReflectionException
     */
    public function testMethodsPassthroughs(string $methodName, array $arguments): void
    {
        $mockLogger = $this->getMockBuilder(LoggerInterface::class)
            ->setMethods([$methodName])
            ->getMockForAbstractClass();

        $loggerWrap = new LoggerWrap($mockLogger);

        $mockLogger->expects($this->once())
            ->method($methodName)
            ->with(...$arguments);

        $loggerWrap->$methodName(...$arguments);
    }

    /**
     * @param string $methodName
     * @param array  $arguments
     *
     * @dataProvider listOfMethods
     */
    public function testMethodsDoesNotPassthroughs(string $methodName, array $arguments): void
    {
        $loggerWrap = new LoggerWrap();

        $loggerWrap->$methodName(...$arguments);
        $this->expectNotToPerformAssertions();
    }
}
