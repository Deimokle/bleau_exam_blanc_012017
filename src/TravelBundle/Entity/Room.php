<?php

namespace TravelBundle\Entity;

/**
 * Room
 */
class Room
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $roomNumber;

    /**
     * @var int
     */
    private $capacity;

    /**
     * @var int
     */
    private $book;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set roomNumber
     *
     * @param string $roomNumber
     *
     * @return Room
     */
    public function setRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;

        return $this;
    }

    /**
     * Get roomNumber
     *
     * @return string
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    /**
     * Set capacity
     *
     * @param integer $capacity
     *
     * @return Room
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return int
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set book
     *
     * @param integer $book
     *
     * @return Room
     */
    public function setBook($book)
    {
        $this->book = $book;

        return $this;
    }

    /**
     * Get book
     *
     * @return int
     */
    public function getBook()
    {
        return $this->book;
    }
}

