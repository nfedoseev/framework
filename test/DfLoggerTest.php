<?php
/**
 * Daitel Framework
 * Test Class for file work
 *
 * @author Nikita Fedoseev <agent.daitel@gmail.com>
 * @link https://github.com/daitel/framework
 *
 */
class DfLoggerTest extends PHPUnit_Framework_TestCase
{

	public function testLog()
	{
		DfApp::app()->log()->log('log', 'log', 'log', 'log');

		$logData = DfApp::app()->log()->getLogData();
		$this->assertEquals(true, (!empty($logData)));

		$logData = DfApp::app()->log()->getLogDataByComponent('log');
		$this->assertEquals(true, (!empty($logData)));

		$logData = DfApp::app()->log()->getLogDataByLevel('log');
		$this->assertEquals(true, (!empty($logData)));

		$logData = DfApp::app()->log()->getLogDataByType('log');
		$this->assertEquals(true, (!empty($logData)));
	}

	public function testSave()
	{
		DfApp::app()->log()->save('test/log.txt');
		$this->assertEquals(true, file_exists('test/log.txt'));
	}
}