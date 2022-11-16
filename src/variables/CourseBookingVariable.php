<?php
/**
 * Course Booking plugin for Craft CMS 3.x
 *
 * Course Booking System
 *
 * @link      https://phpdots.com
 * @copyright Copyright (c) 2022 PHPDots Technologies
 */

namespace piyushphpdots\coursebooking\variables;

use piyushphpdots\coursebooking\CourseBooking;

use Craft;

/**
 * Course Booking Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.courseBooking }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    PHPDots Technologies
 * @package   CourseBooking
 * @since     1.0.0
 */
class CourseBookingVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.courseBooking.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.courseBooking.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
