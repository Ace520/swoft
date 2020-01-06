<?php  declare(strict_types=1);

namespace App\Model\Chat;


use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;

/**
 * Class User
 * @package App\Model\Chat
 *
 * @Entity(table="users", pool="db.pool")
 */
class User extends Model
{
    /**
     * @Id(incrementing=true)
     *
     * @Column(name="id", prop="id")
     * @var int|null
     */
    private $id;

    /**
     * @Column()
     * @var string|null
     */
    private $username;

    /**
     * @Column()
     * @var int|null
     */
    private $hahh;


    /**
     * @return null|int
     */
    public function getHahh(): ?int
    {
        return $this->hahh;
    }

    /**
     * @param null|int $hahh
     */
    public function setHahh(?int $hahh): void
    {
        $this->hahh = $hahh;
    }

    /**
     * @Column(name="password", hidden=true)
     * @var string|null
     */
    private $pwd;

    /**
     * @Column()
     *
     * @var int|null
     */
    private $age;

    /**
     * @Column(name="user_desc", prop="udesc")
     *
     * @var string|null
     */
    private $userDesc;

    /**
     * this key is hump
     *
     * @Column()
     *
     * @var string|null
     */
    private $testHump;

    /**
     *
     *
     * @Column(name="test_json", prop="testJson")
     * @var array|null
     */
    private $testJson;

    /**
     *
     *
     * @Column()
     * @var float|null
     */
    private $amount;

    /**
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * @param float|null $amount
     */
    public function setAmount(?float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return null|array
     */
    public function getTestJson(): ?array
    {
        return $this->testJson;
    }

    /**
     * @param null|array $testJson
     */
    public function setTestJson(?array $testJson): void
    {
        $this->testJson = $testJson;
    }


    /**
     * @return null|string
     */
    public function getTestHump(): ?string
    {
        return $this->testHump;
    }

    /**
     * @param null|string $testHump
     */
    public function setTestHump(?string $testHump): void
    {
        $this->testHump = $testHump;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int|null $age
     */
    public function setAge(?int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->username;
    }

    /**
     * @param string|null $username
     */
    public function setUserName(?string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string|null
     */
    public function getPwd(): string
    {
        return $this->pwd;
    }

    /**
     * @param string|null $pwd
     */
    public function setPwd(?string $pwd): void
    {
        $this->pwd = $pwd;
    }

    /**
     * @return string|null
     */
    public function getUserDesc(): string
    {
        return $this->userDesc;
    }

    /**
     * @param string|null $userDesc
     */
    public function setUserDesc(?string $userDesc): void
    {
        $this->userDesc = $userDesc;
    }
}
