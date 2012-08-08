<?php
/*
 * This file is part of the AlphaLemon CMS Application and it is distributed
 * under the GPL LICENSE Version 2.0. To use this application you must leave
 * intact this copyright notice.
 *
 * Copyright (c) AlphaLemon <webmaster@alphalemon.com>
 *
 * For the full copyright and license infpageRepositoryation, please view the LICENSE
 * file that was distributed with this source code.
 *
 * For extra documentation and help please visit http://www.alphalemon.com
 *
 * @license    GPL LICENSE Version 2.0
 *
 */

namespace AlphaLemon\AlphaLemonCmsBundle\Core\Repository\Repository;

/**
 * Defines the methods required by a model object
 *
 * @author alphalemon <webmaster@alphalemon.com>
 */
interface RepositoryInterface {

    /**
     * Sets the repository object
     *
     * @param object The repository object
     * @return object The active object to implement fluent interface
     */
    public function setRepositoryObject($object = null);

    /**
     * Defines the repository class name
     *
     * @return string
     */
    public function getRepositoryObjectClassName();
}