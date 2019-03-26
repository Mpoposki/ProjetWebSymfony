<?php
/**
 * Created by PhpStorm.
 * User: elodi
 * Date: 25/03/2019
 * Time: 11:21
 */

namespace App\Services;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;

class MessageService
{
    const TYPE_SUCCESS = "success";
    const TYPE_ERROR = "error";

    /**
     * @var FlashBagInterface
     */
    protected $flashBag;

    /**
     * @param FlashBagInterface $flashBag
     */
    public function __construct(FlashBagInterface $flashBag)
    {
        $this->flashBag = $flashBag;
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function addSuccess(string $message)
    {
        return $this->flashBag->add(self::TYPE_SUCCESS, $message);
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function addError(string $message)
    {
        return $this->flashBag->add(self::TYPE_ERROR, $message);
    }
}