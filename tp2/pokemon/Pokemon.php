<?php

class Pokemon
{

  private int $id;
  private int $weight;
  private int $height;
  private int $base_experience;
  private int $hp;
  private int $atk;
  private int $def;
  private int $spa;
  private int $spd;
  private int $spe;
  private string $name;
  private string $slug;
  private string $id_api;
  private string $name_api;
  private int $is_default;



  /**
   * Get the value of id
   */
  public function getId()
  {
    return $this->id;
  }


  /**
   * Get the value of weight
   */
  public function getWeight()
  {
    return $this->weight;
  }


  /**
   * Get the value of height
   */
  public function getHeight()
  {
    return $this->height;
  }


  /**
   * Get the value of base_experience
   */
  public function getBase_experience()
  {
    return $this->base_experience;
  }


  /**
   * Get the value of hp
   */
  public function getHp()
  {
    return $this->hp;
  }


  /**
   * Get the value of atk
   */
  public function getAtk()
  {
    return $this->atk;
  }



  /**
   * Get the value of def
   */
  public function getDef()
  {
    return $this->def;
  }


  /**
   * Get the value of spa
   */
  public function getSpa()
  {
    return $this->spa;
  }


  /**
   * Get the value of spd
   */
  public function getSpd()
  {
    return $this->spd;
  }


  /**
   * Get the value of spe
   */
  public function getSpe()
  {
    return $this->spe;
  }


  /**
   * Get the value of name
   */
  public function getName()
  {
    return $this->name;
  }


  /**
   * Get the value of slug
   */
  public function getSlug()
  {
    return $this->slug;
  }


  /**
   * Get the value of id_api
   */
  public function getId_api()
  {
    return $this->id_api;
  }


  /**
   * Get the value of name_api
   */
  public function getName_api()
  {
    return $this->name_api;
  }


  /**
   * Get the value of is_default
   */
  public function getIs_default()
  {
    return $this->is_default;
  }


  /**
   * Set the value of id
   *
   * @return  self
   */
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Set the value of weight
   *
   * @return  self
   */
  public function setWeight($weight)
  {
    $this->weight = $weight;

    return $this;
  }

  /**
   * Set the value of height
   *
   * @return  self
   */
  public function setHeight($height)
  {
    $this->height = $height;

    return $this;
  }

  /**
   * Set the value of base_experience
   *
   * @return  self
   */
  public function setBase_experience($base_experience)
  {
    $this->base_experience = $base_experience;

    return $this;
  }

  /**
   * Set the value of hp
   *
   * @return  self
   */
  public function setHp($hp)
  {
    $this->hp = $hp;

    return $this;
  }

  /**
   * Set the value of atk
   *
   * @return  self
   */
  public function setAtk($atk)
  {
    $this->atk = $atk;

    return $this;
  }

  /**
   * Set the value of def
   *
   * @return  self
   */
  public function setDef($def)
  {
    $this->def = $def;

    return $this;
  }

  /**
   * Set the value of spa
   *
   * @return  self
   */
  public function setSpa($spa)
  {
    $this->spa = $spa;

    return $this;
  }

  /**
   * Set the value of spd
   *
   * @return  self
   */
  public function setSpd($spd)
  {
    $this->spd = $spd;

    return $this;
  }

  /**
   * Set the value of spe
   *
   * @return  self
   */
  public function setSpe($spe)
  {
    $this->spe = $spe;

    return $this;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Set the value of slug
   *
   * @return  self
   */
  public function setSlug($slug)
  {
    $this->slug = $slug;

    return $this;
  }

  /**
   * Set the value of id_api
   *
   * @return  self
   */
  public function setId_api($id_api)
  {
    $this->id_api = $id_api;

    return $this;
  }

  /**
   * Set the value of name_api
   *
   * @return  self
   */
  public function setName_api($name_api)
  {
    $this->name_api = $name_api;

    return $this;
  }

  /**
   * Set the value of is_default
   *
   * @return  self
   */
  public function setIs_default($is_default)
  {
    $this->is_default = $is_default;

    return $this;
  }

  public function deleteById()
  {
    echo "delete.php?pokemon_id=" . $this->getId();
  }

  public function editById()
  {
    echo "edit.php?pokemon_id=" . $this->getId();
  }
}
