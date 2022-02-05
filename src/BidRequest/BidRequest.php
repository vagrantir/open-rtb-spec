<?php

declare(strict_types=1);

namespace Dgs\OpenRtbSpec\BidRequest;

class BidRequest
{
    private string $id;
    private Imp    $imp;
    private Site   $site;
    private App    $app;
    private Device $device;
    private User   $user;
    /**
     * Indicator of test mode in which auctions are not billable,
     * where 0 = live mode, 1 = test mode.
     * @var int
     */
    private int $test = 0;
    /**
     * Auction type, where 1 = First Price, 2 = Second Price Plus.
     * Exchange-specific auction types can be defined using values
     * greater than 500.
     * @var int
     */
    private int $at = 2;
    /**
     * Maximum time in milliseconds the exchange allows for bids to
     * be received including Internet latency to avoid timeout. This
     * value supersedes any a priori guidance from the exchange.
     * @var int
     */
    private int $tmax;
    /**
     * White list of buyer seats (e.g., advertisers, agencies) allowed
     * to bid on this impression. IDs of seats and knowledge of the
     * buyer’s customers to which they refer must be coordinated
     * between bidders and the exchange a priori. At most, only one
     * of wseat and bseat should be used in the same request.
     * Omission of both implies no seat restrictions.
     * @var string[]
     */
    private array $wseat = [];
    /**
     * Block list of buyer seats (e.g., advertisers, agencies) restricted
     * from bidding on this impression. IDs of seats and knowledge
     * of the buyer’s customers to which they refer must be
     * coordinated between bidders and the exchange a priori. At
     * most, only one of wseat and bseat should be used in the
     * same request. Omission of both implies no seat restrictions.
     * @var string[]
     */
    private array $bseat = [];
    /**
     * Array of allowed currencies for bids on this bid request using ISO-4217 alpha codes
     * @var string[]
     */
    private array $cur = ["usd"];
    /**
     * White list of languages for creatives using ISO-639-1-alpha-2
     * @var string[]
     */
    private array $wlang = [];
    /**
     * Blocked advertiser categories using the IAB content
     * categories
     * @var string[]
     */
    private array $bcat = [];
    /**
     * Block list of advertisers by their domains (e.g., “ford.com”).
     * @var string[]
     */
    private array $badv = [];
    /**
     * Block list of applications by their platform-specific exchange-
     * independent application identifiers. On Android, these should
     * be bundle or package names (e.g., com.foo.mygame). On iOS,
     * these are numeric IDs.
     * @var string[]
     */
    private array  $bapp = [];
    private Source $source;
    private Regs   $regs;
    private Ext    $ext;

    /**
     * @param string $id
     * @param int $test
     * @param int $tmax
     */
    public function __construct(string $id, int $tmax, int $at = 2, int $test = 0)
    {
        $this->id = $id;
        $this->test = $test;
        $this->at = $at;
        $this->tmax = $tmax;
    }


    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return Imp
     */
    public function getImp(): Imp
    {
        return $this->imp;
    }

    /**
     * @param Imp $imp
     */
    public function setImp(Imp $imp): void
    {
        $this->imp = $imp;
    }

    /**
     * @return Site
     */
    public function getSite(): Site
    {
        return $this->site;
    }

    /**
     * @param Site $site
     */
    public function setSite(Site $site): void
    {
        $this->site = $site;
    }

    /**
     * @return App
     */
    public function getApp(): App
    {
        return $this->app;
    }

    /**
     * @param App $app
     */
    public function setApp(App $app): void
    {
        $this->app = $app;
    }

    /**
     * @return Device
     */
    public function getDevice(): Device
    {
        return $this->device;
    }

    /**
     * @param Device $device
     */
    public function setDevice(Device $device): void
    {
        $this->device = $device;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return int
     */
    public function getTest(): int
    {
        return $this->test;
    }

    /**
     * @param int $test
     */
    public function setTest(int $test): void
    {
        $this->test = $test;
    }

    /**
     * @return int
     */
    public function getAt(): int
    {
        return $this->at;
    }

    /**
     * @param int $at
     */
    public function setAt(int $at): void
    {
        $this->at = $at;
    }

    /**
     * @return int
     */
    public function getTmax(): int
    {
        return $this->tmax;
    }

    /**
     * @param int $tmax
     */
    public function setTmax(int $tmax): void
    {
        $this->tmax = $tmax;
    }

    /**
     * @return string[]
     */
    public function getWseat(): array
    {
        return $this->wseat;
    }

    /**
     * @param string[] $wseat
     */
    public function setWseat(array $wseat): void
    {
        $this->wseat = $wseat;
    }

    /**
     * @return string[]
     */
    public function getBseat(): array
    {
        return $this->bseat;
    }

    /**
     * @param string[] $bseat
     */
    public function setBseat(array $bseat): void
    {
        $this->bseat = $bseat;
    }

    /**
     * @return string[]
     */
    public function getCur(): array
    {
        return $this->cur;
    }

    /**
     * @param string[] $cur
     */
    public function setCur(array $cur): void
    {
        $this->cur = $cur;
    }

    /**
     * @return string[]
     */
    public function getWlang(): array
    {
        return $this->wlang;
    }

    /**
     * @param string[] $wlang
     */
    public function setWlang(array $wlang): void
    {
        $this->wlang = $wlang;
    }

    /**
     * @return string[]
     */
    public function getBcat(): array
    {
        return $this->bcat;
    }

    /**
     * @param string[] $bcat
     */
    public function setBcat(array $bcat): void
    {
        $this->bcat = $bcat;
    }

    /**
     * @return string[]
     */
    public function getBadv(): array
    {
        return $this->badv;
    }

    /**
     * @param string[] $badv
     */
    public function setBadv(array $badv): void
    {
        $this->badv = $badv;
    }

    /**
     * @return string[]
     */
    public function getBapp(): array
    {
        return $this->bapp;
    }

    /**
     * @param string[] $bapp
     */
    public function setBapp(array $bapp): void
    {
        $this->bapp = $bapp;
    }

    /**
     * @return Source
     */
    public function getSource(): Source
    {
        return $this->source;
    }

    /**
     * @param Source $source
     */
    public function setSource(Source $source): void
    {
        $this->source = $source;
    }

    /**
     * @return Regs
     */
    public function getRegs(): Regs
    {
        return $this->regs;
    }

    /**
     * @param Regs $regs
     */
    public function setRegs(Regs $regs): void
    {
        $this->regs = $regs;
    }

    /**
     * @return Ext
     */
    public function getExt(): Ext
    {
        return $this->ext;
    }

    /**
     * @param Ext $ext
     */
    public function setExt(Ext $ext): void
    {
        $this->ext = $ext;
    }

    public function isExpired(float $startMicrotime): bool
    {
        return round((\microtime(true) - $startMicrotime) / 1000) > $this->tmax;
    }
}