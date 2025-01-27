<?php
/**
 * Class Example
 *
 * This is an example class to demonstrate PHP docblock tags.
 *
 * @package    PsrCompliant
 * @subpackage DocBlock
 * @category   Example
 * @author     John Doe <john.doe@example.com>
 * @version    1.0.0
 * @license    MIT
 * @link       https://www.example.com
 * @since      1.0.0
 */
class Example {
    /**
     * Example property
     *
     * @var string
     */
    private $exampleProperty;

    /**
     * Constructor
     *
     * @param string $exampleProperty Example property
     */
    public function __construct($exampleProperty) {
        $this->exampleProperty = $exampleProperty;
    }

    /**
     * Get example property
     *
     * @return string
     */
    public function getExampleProperty() {
        return $this->exampleProperty;
    }

    /**
     * Set example property
     *
     * @param string $exampleProperty Example property
     * @return void
     */
    public function setExampleProperty($exampleProperty) {
        $this->exampleProperty = $exampleProperty;
    }

    /**
     * Example method
     *
     * @throws \Exception If something goes wrong
     * @return void
     */
    public function exampleMethod() {
        // ...method code...
    }

    /**
     * Example deprecated method
     *
     * @deprecated Use newExampleMethod instead
     * @return void
     */
    public function deprecatedMethod() {
        // ...method code...
    }

    /**
     * New example method
     *
     * @return void
     */
    public function newExampleMethod() {
        // ...method code...
    }
}
