<?php
/**
 * Created by PhpStorm.
 * User: jani
 * Date: 22/09/2014
 * Time: 23:23
 */

namespace Tdd\Test\Practice02;

use Tdd\Practice02\Sequence;
use Tdd\Practice02\SequenceAnalyser;

class SequenceAnalyserTest extends \PHPUnit_Framework_TestCase
{
    private $sequence = null;

    private $sequenceAnalyser = null;

    /**
     * @param array $elements
     * @param int $max
     *
     * @dataProvider sequenceMaxDataProvider
     */
    public function testGetSequenceMax(array $elements, $max)
    {
        $this->sequence = new Sequence($elements);
        $this->sequenceAnalyser = new SequenceAnalyser($this->sequence);
        $this->assertEquals($max, $this->sequenceAnalyser->getSequenceMax());
    }

    /**
     * sequenceMaxDataProvider
     *
     * @return array
     */
    public function sequenceMaxDataProvider()
    {
        return array(
            array(array(1, 4), 4),
            array(array(123, 45), 123),
            array(array(-1, -4), -1),
        );
    }

    /**
     * @param array $elements
     * @param int $min
     *
     * @dataProvider sequenceMinDataProvider
     */
    public function testGetSequenceMin(array $elements, $min)
    {
        $this->sequence = new Sequence($elements);
        $this->sequenceAnalyser = new SequenceAnalyser($this->sequence);
        $this->assertEquals($min, $this->sequenceAnalyser->getSequenceMin());
    }

    /**
     * sequenceMinDataProvider
     *
     * @return array
     */
    public function sequenceMinDataProvider()
    {
        return array(
            array(array(1, 4), 1),
            array(array(123, 45), 45),
            array(array(-1, -4), -4),
        );
    }

    /**
     * @param array $elements
     * @param int $count
     *
     * @dataProvider sequenceElementCountDataProvider
     */
    public function testGetSequenceElementCount(array $elements, $count)
    {
        $this->sequence = new Sequence($elements);
        $this->sequenceAnalyser = new SequenceAnalyser($this->sequence);
        $this->assertEquals($count, $this->sequenceAnalyser->getSequenceElementCount());
    }

    /**
     * sequenceElementCountDataProvider
     *
     * @return array
     */
    public function sequenceElementCountDataProvider()
    {
        return array(
            array(array(1, 4), 2),
            array(array(123, 45), 2),
            array(array(-1, -4), 2),
        );
    }

    /**
     * @param array $elements
     * @param int $average
     *
     * @dataProvider sequenceAverageDataProvider
     */
    public function testGetSequenceAverage(array $elements, $average)
    {
        $this->sequence = new Sequence($elements);
        $this->sequenceAnalyser = new SequenceAnalyser($this->sequence);
        $this->assertEquals($average, $this->sequenceAnalyser->getSequenceAverage());
    }

    /**
     * sequenceAverageDataProvider
     *
     * @return array
     */
    public function sequenceAverageDataProvider()
    {
        return array(
            array(array(1, 4), 2.5),
            array(array(123, 45), 84),
            array(array(-1, -4), -2.5),
        );
    }
}
 