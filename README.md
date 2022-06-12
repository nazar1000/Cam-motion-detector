A little project I was planing to make for sometime untill I finally managed to do it. 

Its made of js, no libraries, except WebRTC which is build into js I think.


What it can do:
-- As far as it goes, in the current version, it can be used as a simple 	motion detector which can notify user by sound. 
-- You can setup custom zones to check specific areas for movement.
-- You can use it as a door bell, if you can point it at your door.



Status:

2) Update 2

-- Improved UI
-- Added pixel noise balancer, 
-- general code tweaks



1) As of the initial commit, the project is mostly working, however it is not perfect:

What it cannot do/lacks:
-- It currently does not have a instruction for how to use UI and what it does. (Done/improved UI in update 2).
-- It requres better algorythms to work well and be self adjustable. (Works better with added pixel noise balancer in update 2)
-- It needs to be manually adjusted for noise caused by low brightness, as well as initial setup. (Improved in update 2)
-- It does not remember previous settings, so it has to be setup each time. (Not yet implemented)
-- It has hard coded camera resolution and is not compatible with mobiles. (Not yet improved))
-- It does not track objects too well, just detects them.
-- It has limited ability to collect data for a database (requires code tweaking).

