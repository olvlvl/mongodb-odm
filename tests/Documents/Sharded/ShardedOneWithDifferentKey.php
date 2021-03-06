<?php

declare(strict_types=1);

namespace Documents\Sharded;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Note: this document intentially collides with ShardedOne to test shard key changes
 *
 * @ODM\Document(collection="sharded.one")
 * @ODM\Indexes(
 *     @ODM\Index(keys={"v"="asc"})
 * )
 * @ODM\ShardKey(keys={"v"="asc"})
 */
class ShardedOneWithDifferentKey
{
    /** @ODM\Id */
    public $id;

    /** @ODM\Field(type="string") */
    public $title = 'test';

    /** @ODM\Field(name="k", type="string") */
    public $key = 'testing';

    /** @ODM\Field(name="v", type="string") */
    public $value = 'testing';
}
