<?php


class Toy
{
    public string $name;
    public string $type;
    public string $age;

    /**
     * Toy constructor.
     * @param string $name
     * @param string $type
     * @param string $age
     */
    public function __construct(string $name, string $type, string $age)
    {
        $this->name = $name;
        $this->type = $type;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getAge(): string
    {
        return $this->age;
    }

    /**
     * @param string $age
     */
    public function setAge(string $age): void
    {
        $this->age = $age;
    }
}