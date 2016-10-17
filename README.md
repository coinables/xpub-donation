# Xpub Donations Stealth Donations

This repo is based on my YouTube video: 
Xpub Bitcoin Receiving Addresses with SmartBit API (https://www.youtube.com/watch?v=ohHmvdeJRo0)
 
# About
  The idea behind this is it allows a website/blog owner to privately accept donations in bitcoin without 
  revealing their extended public-key, or losing privacy by re-using a static Bitcoin address. 
  
  When you re-use a single address others can see your transactions so they'll know how much you 
  are receiving and how often. 
  
  Sharing an extended public-key(xpub) would allow your visitors to derive all addresses as 
  well, allowing them to view all your transactions.
  
  This repository will always display the next zero-balance address in the sequence to viewers. 
  No visitor will ever know any of your previous transasctions giving you complete privacy. QR 
  codes are generated client-side using JavaScript. The xpub data is pulled from SmartBit's API 
  using PHP. 

0. Usage

 * All you need is a server that can run PHP.
 * Just update the $xpub variable to your xpub.

1. On line 4 of xpub.php update the $xpub variable to your xpub.

        $xpub = "xpub6CUGRUonZSQ4TWtTMmzXdrXDtypWKiKrhko4egpiMZbpiaQL2jkwSB1icqYh2cfDfVxdx4df189oLKnC5fSwqPfgyP3hooxujYzAu3fDVmz";


		
		
		