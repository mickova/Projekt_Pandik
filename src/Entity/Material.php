<?php

namespace App\Entity;

use App\Repository\MaterialRepository;
use Doctrine\ORM\Mapping as ORM;
use DateTime;
use DateTimeZone;

#[ORM\Entity(repositoryClass: MaterialRepository::class)]
class Material
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'user')]
    private User $user;

    #[ORM\Column(length: 4000)]
    private ?string $school_subject = null;

    #[ORM\Column(length: 4000)]
    private ?string $content = null;

    #[ORM\Column(length: 4000)]
    private DateTime $date_of_upload;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getSchoolSubject(): ?string
    {
        return $this->school_subject;
    }

    public function setSchoolSubject(string $school_subject): self
    {
        $this->school_subject = $school_subject;

        return $this;
    }

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setDate()
    {
        $now = new DateTime('now', new DateTimeZone('Europe/Prague'));
        $this->date_of_upload = $now;
    }

    public function getDate()
    {
        return $this->date_of_upload->format('d.m.Y');
    }
}
