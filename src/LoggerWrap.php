<?php

declare(strict_types=1);

namespace Thruster\LoggerWrap;

use Psr\Log\LoggerInterface;

/**
 * Class LoggerWrap.
 *
 * @author Aurimas Niekis <aurimas@niekis.lt>
 */
class LoggerWrap implements LoggerInterface
{
    /** @var LoggerInterface */
    private $logger;

    public function __construct(LoggerInterface $logger = null)
    {
        $this->logger = $logger;
    }

    public function emergency($message, array $context = []): void
    {
        if (null !== $this->logger) {
            $this->logger->emergency($message, $context);
        }
    }

    public function alert($message, array $context = []): void
    {
        if (null !== $this->logger) {
            $this->logger->alert($message, $context);
        }
    }

    public function critical($message, array $context = []): void
    {
        if (null !== $this->logger) {
            $this->logger->critical($message, $context);
        }
    }

    public function error($message, array $context = []): void
    {
        if (null !== $this->logger) {
            $this->logger->error($message, $context);
        }
    }

    public function warning($message, array $context = []): void
    {
        if (null !== $this->logger) {
            $this->logger->warning($message, $context);
        }
    }

    public function notice($message, array $context = []): void
    {
        if (null !== $this->logger) {
            $this->logger->notice($message, $context);
        }
    }

    public function info($message, array $context = []): void
    {
        if (null !== $this->logger) {
            $this->logger->info($message, $context);
        }
    }

    public function debug($message, array $context = []): void
    {
        if (null !== $this->logger) {
            $this->logger->debug($message, $context);
        }
    }

    public function log($level, $message, array $context = []): void
    {
        if (null !== $this->logger) {
            $this->logger->log($level, $message, $context);
        }
    }
}
