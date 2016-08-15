<?php

namespace KP\CommandBus;

use KP\CommandBus\Response\ResponseInterface;

/**
 * @author Konrad Podgórski <konrad.podgorski@gmail.com>
 */
interface CommandHandlerInterface
{
    /**
     * @param CommandInterface $command
     *
     * @return ResponseInterface
     */
    public function handle(CommandInterface $command);
}
