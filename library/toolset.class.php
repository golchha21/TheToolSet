<?php
	define( '_CODENAME', 'TheToolSet'); 
	define( '_VERSION', '1.0.2'); 
	define( '_URL', 'https://github.com/golchha21/TheToolSet'); 
	
	class THETOOLSET {
		
		// CURL timeout
		private $timeout 	= 5;
		// CURL Useragent
		private $useragent 	= 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13';
		// Data for processing
		private $data		= array();
		// WHOIS server list
		private $servers 	= array(
			'ac'		=> 'whois.nic.ac',
			'ae'		=> 'whois.nic.ae',
			'aero'		=> 'whois.aero',
			'af' 		=> 'whois.nic.af',
			'ag' 		=> 'whois.nic.ag',
			'al' 		=> 'whois.ripe.net',
			'am' 		=> 'whois.amnic.net',
			'arpa' 		=> 'whois.iana.org',
			'as' 		=> 'whois.nic.as',
			'asia' 		=> 'whois.nic.asia',
			'at'		=> 'whois.nic.at',
			'au' 		=> 'whois.aunic.net',
			'az' 		=> 'whois.ripe.net',
			'ba' 		=> 'whois.ripe.net',
			'be' 		=> 'whois.dns.be',
			'bg' 		=> 'whois.register.bg',
			'bi' 		=> 'whois.nic.bi',
			'biz' 		=> 'whois.biz',
			'bj' 		=> 'whois.nic.bj',
			'br' 		=> 'whois.registro.br',
			'bt' 		=> 'whois.netnames.net',
			'by' 		=> 'whois.ripe.net',
			'bz' 		=> 'whois.belizenic.bz',
			'ca' 		=> 'whois.cira.ca',
			'cat' 		=> 'whois.cat',
			'cc' 		=> 'whois.nic.cc',
			'cd' 		=> 'whois.nic.cd',
			'ch' 		=> 'whois.nic.ch',
			'ci' 		=> 'whois.nic.ci',
			'ck' 		=> 'whois.nic.ck',
			'cl' 		=> 'whois.nic.cl',
			'cn' 		=> 'whois.cnnic.net.cn',
			'com' 		=> 'whois.verisign-grs.com',
			'coop' 		=> 'whois.nic.coop',
			'cx' 		=> 'whois.nic.cx',
			'cy' 		=> 'whois.ripe.net',
			'cz' 		=> 'whois.nic.cz',
			'de' 		=> 'whois.denic.de',
			'dk' 		=> 'whois.dk-hostmaster.dk',
			'dm' 		=> 'whois.nic.cx',
			'dz' 		=> 'whois.ripe.net',
			'edu' 		=> 'whois.educause.edu',
			'ee' 		=> 'whois.eenet.ee',
			'eg' 		=> 'whois.ripe.net',
			'es' 		=> 'whois.ripe.net',
			'eu' 		=> 'whois.eu',
			'fi' 		=> 'whois.ficora.fi',
			'fo' 		=> 'whois.ripe.net',
			'fr' 		=> 'whois.nic.fr',
			'gb' 		=> 'whois.ripe.net',
			'gd' 		=> 'whois.adamsnames.com',
			'ge' 		=> 'whois.ripe.net',
			'gg' 		=> 'whois.channelisles.net',
			'gi' 		=> 'whois2.afilias-grs.net',
			'gl' 		=> 'whois.ripe.net',
			'gm' 		=> 'whois.ripe.net',
			'gov' 		=> 'whois.nic.gov',
			'gr' 		=> 'whois.ripe.net',
			'gs' 		=> 'whois.nic.gs',
			'gw' 		=> 'whois.nic.gw',
			'gy' 		=> 'whois.registry.gy',
			'hk' 		=> 'whois.hkirc.hk',
			'hm' 		=> 'whois.registry.hm',
			'hn' 		=> 'whois2.afilias-grs.net',
			'hr' 		=> 'whois.ripe.net',
			'hu' 		=> 'whois.nic.hu',
			'ie' 		=> 'whois.domainregistry.ie',
			'il' 		=> 'whois.isoc.org.il',
			'in' 		=> 'whois.inregistry.net',
			'info' 		=> 'whois.afilias.net',
			'int' 		=> 'whois.iana.org',
			'io' 		=> 'whois.nic.io',
			'iq' 		=> 'vrx.net',
			'ir' 		=> 'whois.nic.ir',
			'is' 		=> 'whois.isnic.is',
			'it' 		=> 'whois.nic.it',
			'je' 		=> 'whois.channelisles.net',
			'jobs' 		=> 'jobswhois.verisign-grs.com',
			'jp' 		=> 'whois.jprs.jp',
			'ke' 		=> 'whois.kenic.or.ke',
			'kg' 		=> 'www.domain.kg',
			'ki' 		=> 'whois.nic.ki',
			'kr' 		=> 'whois.nic.or.kr',
			'kz' 		=> 'whois.nic.kz',
			'la' 		=> 'whois.nic.la',
			'li' 		=> 'whois.nic.li',
			'lt' 		=> 'whois.domreg.lt',
			'lu' 		=> 'whois.dns.lu',
			'lv' 		=> 'whois.nic.lv',
			'ly' 		=> 'whois.nic.ly',
			'ma' 		=> 'whois.iam.net.ma',
			'mc' 		=> 'whois.ripe.net',
			'md' 		=> 'whois.ripe.net',
			'me' 		=> 'whois.meregistry.net',
			'mg' 		=> 'whois.nic.mg',
			'mil' 		=> 'whois.nic.mil',
			'mn' 		=> 'whois.nic.mn',
			'mobi' 		=> 'whois.dotmobiregistry.net',
			'ms' 		=> 'whois.adamsnames.tc',
			'mt' 		=> 'whois.ripe.net',
			'mu' 		=> 'whois.nic.mu',
			'museum' 	=> 'whois.museum',
			'mx' 		=> 'whois.nic.mx',
			'my' 		=> 'whois.mynic.net.my',
			'na' 		=> 'whois.na-nic.com.na',
			'name' 		=> 'whois.nic.name',
			'net' 		=> 'whois.verisign-grs.net',
			'nf' 		=> 'whois.nic.nf',
			'nl' 		=> 'whois.domain-registry.nl',
			'no' 		=> 'whois.norid.no',
			'nu' 		=> 'whois.nic.nu',
			'nz' 		=> 'whois.srs.net.nz',
			'org' 		=> 'whois.pir.org',
			'pl' 		=> 'whois.dns.pl',
			'pm' 		=> 'whois.nic.pm',
			'pr' 		=> 'whois.uprr.pr',
			'pro' 		=> 'whois.registrypro.pro',
			'pt' 		=> 'whois.dns.pt',
			're' 		=> 'whois.nic.re',
			'ro' 		=> 'whois.rotld.ro',
			'ru' 		=> 'whois.ripn.net',
			'sa' 		=> 'whois.nic.net.sa',
			'sb' 		=> 'whois.nic.net.sb',
			'sc' 		=> 'whois2.afilias-grs.net',
			'se' 		=> 'whois.iis.se',
			'sg' 		=> 'whois.nic.net.sg',
			'sh' 		=> 'whois.nic.sh',
			'si' 		=> 'whois.arnes.si',
			'sk' 		=> 'whois.ripe.net',
			'sm' 		=> 'whois.ripe.net',
			'st' 		=> 'whois.nic.st',
			'su' 		=> 'whois.ripn.net',
			'tc' 		=> 'whois.adamsnames.tc',
			'tel' 		=> 'whois.nic.tel',
			'tf' 		=> 'whois.nic.tf',
			'th' 		=> 'whois.thnic.net',
			'tj' 		=> 'whois.nic.tj',
			'tk' 		=> 'whois.dot.tk',
			'tl' 		=> 'whois.nic.tl',
			'tm' 		=> 'whois.nic.tm',
			'tn' 		=> 'whois.ripe.net',
			'to' 		=> 'whois.tonic.to',
			'tp' 		=> 'whois.nic.tl',
			'tr' 		=> 'whois.nic.tr',
			'travel' 	=> 'whois.nic.travel',
			'tv' 		=> 'tvwhois.verisign-grs.com',
			'tw' 		=> 'whois.twnic.net.tw',
			'ua' 		=> 'whois.net.ua',
			'ug' 		=> 'whois.co.ug',
			'uk' 		=> 'whois.nic.uk',
			'us' 		=> 'whois.nic.us',
			'uy' 		=> 'nic.uy',
			'uz' 		=> 'whois.cctld.uz',
			'va' 		=> 'whois.ripe.net',
			'vc' 		=> 'whois2.afilias-grs.net',
			've' 		=> 'whois.nic.ve',
			'vg' 		=> 'whois.adamsnames.tc',
			'wf' 		=> 'whois.nic.wf',
			'ws' 		=> 'whois.website.ws',
			'xxx' 		=> 'whois.nic.xxx',
			'yt' 		=> 'whois.nic.yt',
			'yu' 		=> 'whois.ripe.net'
		);
		
		// Constructor
		function __construct( $args = false ) {
			extract($args);
			
			$this->timeout		= ( isset( $timeout ) && $timeout > $this->timeout ? $timeout : $this->timeout );
			$this->useragent	= ( isset( $useragent ) && !empty( $useragent ) ? $useragent : $this->useragent );
			$this->data			= $data;
		}
		
		// Gets the content from the URL
		function getDataFromUrl( $url ) {
			$return = false;
			if ( extension_loaded( 'curl' ) ) {
				$ch = curl_init();
				curl_setopt( $ch, CURLOPT_URL, $url );
				curl_setopt( $ch, CURLOPT_HEADER, true );
				curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
				curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
				curl_setopt( $ch, CURLOPT_MAXREDIRS, 10 );
				curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, $this->timeout );
				curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
				curl_setopt( $ch, CURLOPT_CERTINFO, true );
				curl_setopt( $ch, CURLOPT_FRESH_CONNECT, true );
				curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
				curl_setopt( $ch, CURLOPT_USERAGENT, $this->useragent );
				$return['data'] 	= curl_exec( $ch );
				$return['header']	= curl_getinfo( $ch );
				curl_close( $ch );
			} elseif ( ini_get('allow_url_fopen') ) {
				$return = file_get_contents( $url );
			}
			return $return;
		}
		
		// Return whether the url is valid or not.
		function isValidURL( $url )	{
			return filter_var( $url, FILTER_VALIDATE_URL );
		}
		
		// Return whether the email is valid or not.
		function isValidEMAIL( $email )	{
			return filter_var( $email, FILTER_VALIDATE_EMAIL );
		}
		
		// Prints the content supplied with <pre> tags
		function putPre( $data ) {
			echo '<pre class="prettyprint linenums">';
			print_r( $data );
			echo '</pre>';
		}
		
		// Returns the meta tags for the url.
		function getMetaTags() {
			$return = false;
			$url = $this->data['url'];
			if( $this->isValidURL( $url ) ) {
				extract( parse_url( $url ) );
				$content = $this->getDataFromUrl( $url );
				$md5 = md5($host);
				$file = "$md5.html";
				$handle = fopen( $file, 'w' );
				fwrite( $handle, $content['data'] );
				fclose( $handle );
				$tags = false;
				$tags = get_meta_tags( "$file" );
				if ( $tags ) {
					$return = $tags;
				}
				unlink( $file );
			}
			return $return;
		}
		
		// Returns the header information for the url.
		function getHeaders( $extended = false ) {
			$return = false;
			$url = $this->data['url'];
			if( $this->isValidURL( $url ) ) {
				$headers = false;
				if( $extended ){
					$content = $this->getDataFromUrl( $url );
					$headers = $content['header'];
				} elseif ( ini_get('allow_url_fopen') ) {
					$headers = get_headers( $url, 1 );
				}
				if ( $headers ) {
					$return = $headers;
				}
			}
			return $return;
		}
		
		// Returns the DNS information for the domain.
		function getDNS() {
			$return = false;
			$url = $this->data['url'];
			if( $this->isValidURL( $url ) ) {
				extract( parse_url( $url ) );
				$dns = false;
				$dns = dns_get_record( $host, DNS_ALL );
				if ( $dns ) {
					$return = $dns;
				}
			}
			return $return;
		}
		
		// Returns the mail exchange information for the domain.
		function getMX() {
			$return = false;
			$url = $this->data['url'];
			if( $this->isValidURL( $url ) ) {
				extract( parse_url( $url ) );
				$dns = false;
				getmxrr( $host, $mxhosts, $mxweight );
				$dns['host'] 	= $mxhosts;
				$dns['weight']	= $mxweight;
				if ( $dns ) {
					$return = $dns;
				}
			}
			return $return;
		}
		
		// Returns the whois information for the domain.
		function getWhois ( $nl2br = false ) {
			$return = false;
			$url = $this->data['url'];
			if( $this->isValidURL( $url ) ) {
				$url = preg_replace( '#www.#i', '', $url );
				extract( parse_url( $url ) );
				$domain = $host;
				$host_parts = explode( ".", $host );
				$tld = strtolower( array_pop( $host_parts ) );
				if( array_key_exists( $tld, $this->servers ) ) {
					$server = $this->servers[$tld];
					$fp = @fsockopen($server, 43, $errno, $errstr, 10);
					if( $server == "whois.verisign-grs.com" ) {
						$domain = "=$domain";
					}
					fputs($fp, $domain . "\r\n");
					while(!feof($fp)){
						$return .= fgets($fp);
					}
					fclose($fp);
				} else {
					$return = "Error: No appropriate Whois server found for $domain domain!";
				}
			}
			if( $nl2br ) {
				return nl2br( htmlspecialchars( $return, ENT_QUOTES ) );
			} else {
				return htmlspecialchars( $return, ENT_QUOTES );
			}
		}
	}
?>
