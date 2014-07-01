<?php
/**
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is furnished
 * to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
namespace Phramz\Component\ComposerRepositoryModel\Event;

use Phramz\Component\ComposerRepositoryModel\Model\VersionInterface;
use Phramz\Component\ComposerRepositoryModel\Model\Visitor\VisitorInterface;

/**
 * Class VisitVersionEvent
 * @package Phramz\Component\ComposerRepositoryModel\Event
 */
class VisitVersionEvent extends AbstractVisitEvent
{
    const BEFORE = 'phramz.composer_repository_model.visit_before.version';
    const VISIT = 'phramz.composer_repository_model.visit.version';
    const AFTER = 'phramz.composer_repository_model.visit_after.version';

    /**
     * @var VersionInterface
     */
    protected $version;

    public function __construct(VisitorInterface $visitor, VersionInterface $version)
    {
        parent::__construct($visitor);

        $this->version = $version;
    }

    /**
     * @return VersionInterface
     */
    public function getVersion()
    {
        return $this->version;
    }
}