<?php
/*
1. 11 игроков на поле в 2 командах ( есть роли )
2. Играют в футбол два тайма по 45 секунд, перерыв между ними 10 секунд
3. Каждый игрок оповещает о своих действиях
4. Действия - пас, удар по воротам, аут, подкат, отбил мяч, гол
5. Оповещение о результате таймов и матча в целом
*/

class Game
{
// Внутриигровое время
}

class Player extends Game
{
  public $isBallHere
  public $team
  public $ballIsOut

  public function doPass()
  {
    if ($this->isBallHere)
    {
      $rand = mt_rand(1, 100)
      // С вероятностью 80 процентов
      if ($rand <= 80)
      {
        // Передать мяч игроку своей команды
      } else if ($rand <= 95 and $rand > 80 ) {
        // Передать мяч игроку команды противника
      } else if ($rand > 95) {
        // Мяч ушёл в аут
        return $ballIsOut = true
      }
    }
  }

  public function ballIsOut()
  {
    if ($ballIsOut)
    {
      // Если мяч был у синей команды - отдать красной
      // Иначе - отдать синей
    }
  }
}

class GoalKeeper extends Player
{
  public function goalKeep()
  {

  }
}

class usualPlayer extends Player
{

  public function shotOnGoal()
  {
    if ($this->isBallHere)
    {
      $rand = mt_rand(1, 100)
      if ($rand <= 50)
      {

      }
    }
  }

   public function goal()
  {

  }
}
