<?php
namespace PowerBlockz;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\block\Block;
use pocketmine\level\Level;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\level\Position;
use pocketmine\entity\{Effect, EffectInstance};

class main extends PluginBase implements Listener{

public function onEnable(){

$this->getServer()->getPluginManager()->registerEvents($this, $this);
$this->getLogger()->info("PowerBlockz wurde erfolgreich gestartet!");

}

public function onDisable(){

$this->getLogger()->info("PowerBlockz wurde erfolgreich beendet!");

}

public function onMove(PlayerMoveEvent $e){

$p = $e->getPlayer();
$b = $e->getPlayer()->getLevel()->getBlock($e->getPlayer()->floor()->subtract(0, 1));

$speed = new EffectInstance(Effect::getEffect(1));
$speed->setDuration(2*30);
$speed->setAmplifier(2);

$slowness = new EffectInstance(Effect::getEffect(2));
$slowness->setDuration(2*30);
$slowness->setAmplifier(2);

$haste = new EffectInstance(Effect::getEffect(3));
$haste->setDuration(2*30);
$haste->setAmplifier(2);

$strenght = new EffectInstance(Effect::getEffect(5));
$strenght->setDuration(2*30);
$strenght->setAmplifier(2);

$healing = new EffectInstance(Effect::getEffect(6));
$healing->setDuration(2*30);
$healing->setAmplifier(2);

$ID = new EffectInstance(Effect::getEffect(7));
$ID->setDuration(2*30);
$ID->setAmplifier(2);

$jump = new EffectInstance(Effect::getEffect(8));
$jump->setDuration(2*30);
$jump->setAmplifier(2);

$reg = new EffectInstance(Effect::getEffect(10));
$reg->setDuration(2*30);
$reg->setAmplifier(2);

$poison = new EffectInstance(Effect::getEffect(19));
$poison->setDuration(2*30);
$poison->setAmplifier(2);

$nv = new EffectInstance(Effect::getEffect(16));
$nv->setDuration(2*30);
$nv->setAmplifier(2);

$blindness = new EffectInstance(Effect::getEffect(15));
$blindness->setDuration(2*30);
$blindness->setAmplifier(2);

$weakness = new EffectInstance(Effect::getEffect(18));
$weakness->setDuration(2*30);
$weakness->setAmplifier(2);

$nausea = new EffectInstance(Effect::getEffect(9));
$nausea->setDuration(2*30);
$nausea->setAmplifier(2);

$resistance = new EffectInstance(Effect::getEffect(11));
$resistance->setDuration(2*30);
$resistance->setAmplifier(2);

if($b instanceof Block){

$id = $b->getId();
$meta = $b->getDamage();

if($id == 172 && $meta == 0){

$p->addEffect($speed);

}

if($id == 159 && $meta == 0){

$p->addEffect($slowness);

}

if($id == 159 && $meta == 1){

	$p->addEffect($haste);
	
	}

	if($id == 159 && $meta == 2){

		$p->addEffect($strenght);
		
		}

		if($id == 159 && $meta == 3){

			$p->addEffect($healing);
			
			}

			if($id == 159 && $meta == 4){

				$p->addEffect($ID);
				
				}

				if($id == 159 && $meta == 5){

					$p->addEffect($jump);
					
					}

					if($id == 159 && $meta == 6){

						$p->addEffect($reg);
						
						}

						if($id == 159 && $meta == 7){

							$p->addEffect($poison);
							
							}

							if($id == 159 && $meta == 8){

								$p->addEffect($nv);
								
								}

								if($id == 159 && $meta == 9){

									$p->addEffect($blindness);
									
									}

									if($id == 159 && $meta == 10){

										$p->addEffect($weakness);
										
										}

										if($id == 159 && $meta == 11){

											$p->addEffect($resistance);
											
											}

											if($id == 159 && $meta == 12){

												$p->addEffect($nausea);
												
												}

												if($id == 159 && $meta == 13){

 													$p->removeAllEffects();
												}

}

}


}