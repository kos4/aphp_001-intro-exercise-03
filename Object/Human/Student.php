<?php
namespace Object\Human;

class Student
{
  protected int $id;
  protected string $name;
  protected string $surname;
  protected string $lastname;
  protected \DateTime $birthday;
  protected string $faculty;
  protected int $course;
  protected string $group;
  public static string $type = 'Студент';

  public function __construct(string $name, string $surname, string $lastname, \DateTime $birthday, string $faculty, int $course, string $group)
  {
    $this->id = time();
    $this->name = $name;
    $this->surname = $surname;
    $this->lastname = $lastname;
    $this->birthday = $birthday;
    $this->faculty = $faculty;
    $this->course = $course;
    $this->group = $group;
  }

  public function getId(): int
  {
    return $this->id;
  }

  public function getStudentInfo(): array
  {
    return [
      'id' => $this->id,
      'type' => self::$type,
      'name' => $this->name,
      'surname' => $this->surname,
      'lastname' => $this->lastname,
      'birthday' => $this->birthday,
      'faculty' => $this->faculty,
      'course' => $this->course,
      'group' => $this->group,
    ];
  }

  public static function getType(): string
  {
    return self::$type;
  }

  public function setGroup(string $group): void
  {
    $this->group = $group;
  }

  public function setCourse(int $course): void
  {
    $this->course = $course;
  }
}
