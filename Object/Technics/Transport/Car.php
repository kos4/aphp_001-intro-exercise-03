<?php
namespace Object\Technics\Transport;

class Car
{
  public static string $type = 'Машина';
  protected string $brand;
  protected string $model;
  protected int $year;
  private int $id;

  public function __construct(string $brand, string $model, int $year)
  {
    $this->id = time();
    $this->brand = $brand;
    $this->model = $model;
    $this->year = $year;
  }

  public function getId(): int
  {
    return $this->id;
  }

  public function getCar(): array
  {
    return [
      'id' => $this->id,
      'type' => self::$type,
      'brand' => $this->brand,
      'model' => $this->model,
      'year' => $this->year,
    ];
  }

  public static function getType(): string
  {
    return self::$type;
  }
}