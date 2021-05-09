<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Events;

use App\Entity\Rating;
use App\Entity\Comment;
use Symfony\Contracts\EventDispatcher\Event;

class CommentCreatedEvent extends Event
{
    protected $comment;

    public function __construct(Rating $comment)
    {
        $this->comment = $comment;
    }

    public function getComment(): Rating
    {
        return $this->comment;
    }
}
