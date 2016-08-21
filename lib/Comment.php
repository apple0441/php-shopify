<?php
/**
 * Created by PhpStorm.
 * @author Tareq Mahmood <tareqtms@yahoo.com>
 * Created at 8/19/16 10:58 AM UTC+06:00
 *
 * @see https://help.shopify.com/api/reference/comment Shopify API Reference for Comment
 */

namespace PHPShopify;


/*
 *
 * --------------------------------------------------------------------------
 * Comment -> Child Resources
 * --------------------------------------------------------------------------
 * @property-read ShopifyAPI $Event
 *
 * @method ShopifyAPI Event(integer $id = null)
 *
 * --------------------------------------------------------------------------
 * Comment -> Custom actions
 * --------------------------------------------------------------------------
 * @method array spam()         Mark a Comment as spam
 * @method array notSpam()      Mark a Comment as not spam
 * @method array approve()      Approve a Comment
 * @method array remove()       Remove a Comment
 * @method array restore()      Restore a Comment
 *
 */
class Comment extends ShopifyAPI
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'comment';

    /**
     * @inheritDoc
     */
    protected $childResource = array (
        'Event',
    );

    /**
     * @inheritDoc
     */
    protected $customPostActions = array(
        'spam',
        'not_spam' => 'notSpam',
        'approve',
        'remove',
        'restore',
    );
}