<?php

namespace josegonzalez\Queuesadilla\Worker;

use josegonzalez\Queuesadilla\Worker\Base;

class TestWorker extends Base
{
    /**
     * {@inheritDoc}
     */
    public function work()
    {
        return $this->engine->pop();
    }

    protected function disconnect()
    {
    }
}
