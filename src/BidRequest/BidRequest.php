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
}