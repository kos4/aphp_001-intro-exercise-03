<?php
namespace Object\Technics\Media;

class Tv
{
  public static string $type = 'Телевизор';
  protected string $brand;
  protected string $model;
  protected int $diagonal;
  private int $id;

  public function __construct(string $brand, string $model, int $diagonal)
  {
    $this->id = time();
    $this->brand = $brand;
    $this->model = $model;
    $this->diagonal = $diagonal;
  }

  public function getId(): int
  {
    return $this->id;
  }

  public function getTv(): array
  {
    return [
      'id' => $this->id,
      'type' => self::$type,
      'brand' => $this->brand,
      'model' => $this->model,
      'diagonal' => $this->diagonal,
    ];
  }

  public static function getType(): string
  {
    return self::$type;
  }
}