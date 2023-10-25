<?php
namespace Pattern\Factory;
/**
 * ViewFactory class
 * @package Patterns
 * @subpackage Factory
 * @category creational
 */
class ViewFactory
{
    /**
     * Creates view
     * @param string $type name of custom view
     * @param array  $data array of data for rendering
     * @return IRendereable instance of custom view
     */
    public static function create($type, array $data)
    {
        switch ($type) {
            case 'Atom':
                return new AtomView($data);
                break;
            default:
                return new HtmlView($data);
                break;
        }
    }
}