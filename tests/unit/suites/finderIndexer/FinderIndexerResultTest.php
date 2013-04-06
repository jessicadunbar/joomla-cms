<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  com_finder
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

require_once JPATH_ADMINISTRATOR . '/components/com_finder/helpers/indexer/result.php';

/**
 * Test class for FinderIndexerResult.
 * Generated by PHPUnit on 2012-06-10 at 14:51:47.
 */
class FinderIndexerResultTest extends TestCaseDatabase
{
	/**
	 * @var FinderIndexerResult
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		parent::setUp();

		// Instantiate the object
		$this->object = new FinderIndexerResult;
	}

	/**
	 * Gets the data set to be loaded into the database during setup
	 */
	protected function getDataSet()
	{
		return $this->createXMLDataSet(__DIR__ . '/data/FinderIndexerData.xml');
	}

	/**
	 * Tests the magic get and set methods
	 *
	 * @return  void
	 *
	 * @since   3.1
	 */
	public function test__getAndSet()
	{
		$this->object->testItem = 'success';

		$this->assertEquals(
			$this->object->testItem,
			'success'
		);
	}

	/**
	 * Tests the magic get method for a null return
	 *
	 * @return  void
	 *
	 * @since   3.1
	 */
	public function test__getNull()
	{
		$this->assertEquals(
			$this->object->getSomething,
			null
		);
	}

	/**
	 * Tests the magic isset and unset methods
	 *
	 * @return  void
	 *
	 * @since   3.1
	 */
	public function testMagicSetters()
	{
		// Set our test object
		$this->object->testItem = 'success';

		// Assert it is present
		$this->assertTrue(isset($this->object->testItem));

		// Unset our test project
		unset($this->object->testItem);

		// Assert our test object is gone
		$this->assertEquals(
			$this->object->testItem,
			null
		);
	}

	/**
	 * Tests the getElement method for a null return
	 *
	 * @return  void
	 *
	 * @since   3.1
	 */
	public function testGetElementNull()
	{
		$this->assertEquals(
			$this->object->getElement('getSomething'),
			null
		);
	}

	/**
	 * Tests the getElement and setElement methods
	 *
	 * @return  void
	 *
	 * @since   3.1
	 */
	public function testGetAndSetElement()
	{
		$this->object->setElement('testItem', 'success');

		$this->assertEquals(
			$this->object->getElement('testItem'),
			'success'
		);
	}

	/**
	 * Method to test adding an instruction, retrieving the instructions array, and removing it
	 *
	 * @return  void
	 *
	 * @since   3.1
	 */
	public function testManipulateInstructions()
	{
		// Add our test instruction
		$this->object->addInstruction(FinderIndexer::MISC_CONTEXT, 'testItem');

		$instructions = $this->object->getInstructions();
		$testItem = $instructions[FinderIndexer::MISC_CONTEXT];

		// Assert the test instruction is present
		$this->assertContains(
			'testItem',
			$testItem
		);

		// Remove the test instruction
		$this->object->removeInstruction(FinderIndexer::MISC_CONTEXT, 'testItem');

		$instructions = $this->object->getInstructions();
		$testItem = $instructions[FinderIndexer::MISC_CONTEXT];

		// Assert the test instruction is gone
		$this->assertNotContains(
			'testItem',
			$testItem
		);
	}

	/**
	 * Tests the getTaxonomy method for returning the full taxonomy array
	 *
	 * @return  void
	 *
	 * @since   3.1
	 */
	public function testGetTaxonomy()
	{
		$this->assertThat(
			$this->object->getTaxonomy(),
			$this->isType('array')
		);
	}

	/**
	 * Tests the addTaxonomy and getTaxonomy methods
	 *
	 * @return  void
	 *
	 * @since   3.1
	 */
	public function testTaxonomy()
	{
		// Add the test item to the taxonomy
		$this->object->addTaxonomy('testing', 'Test Item');

		// Retrieve our testing branch
		$taxonomy = $this->object->getTaxonomy('testing');

		// Verify our test item is an instance of JObject
		$this->assertThat(
			$taxonomy['Test Item'],
			$this->isInstanceOf('stdClass')
		);
	}

	/**
	 * Tests the setLanguage method
	 *
	 * @return  void
	 *
	 * @since   3.1
	 */
	public function testSetLanguage()
	{
		// Set the language value
		$this->object->setLanguage();

		$this->assertEquals(
			$this->object->language,
			$this->object->defaultLanguage
		);
	}
}
