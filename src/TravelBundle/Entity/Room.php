<?php

namespace TravelBundle\Entity;

/**
 * Room
 */
class Room
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $room_number;

    /**
     * @var integer
     */
    private $capacity;

    /**
     * @var integer
     */
    private $book;

    /**
     * @var string
     */
    private $website;

    /**
     * @var \TravelBundle\Entity\Hotel
     */
    private $hotel;


    /**
     * Get id
     *
     * @return integer
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
        $this->room_number = $roomNumber;

        return $this;
    }

    /**
     * Get roomNumber
     *
     * @return string
     */
    public function getRoomNumber()
    {
        return $this->room_number;
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
     * @return integer
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
     * @return integer
     */
    public function getBook()
    {
        return $this->book;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return Room
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set hotel
     *
     * @param \TravelBundle\Entity\Hotel $hotel
     *
     * @return Room
     */
    public function setHotel(\TravelBundle\Entity\Hotel $hotel = null)
    {
        $this->hotel = $hotel;

        return $this;
    }

    /**
     * Get hotel
     *
     * @return \TravelBundle\Entity\Hotel
     */
    public function getHotel()
    {
        return $this->hotel;
    }
}
