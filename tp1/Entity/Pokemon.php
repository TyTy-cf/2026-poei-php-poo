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

  public function __construct(
    int $id,
    int $weight,
    int $height,
    int $base_experience,
    int $hp,
    int $atk,
    int $def,
    int $spa,
    int $spd,
    int $spe,
    string $name,
    string $slug,
    string $id_api,
    string $name_api,
    int $is_default
  ) {
    $this->id = $id;
    $this->weight = $weight;
    $this->height = $height;
    $this->base_experience = $base_experience;
    $this->hp = $hp;
    $this->atk = $atk;
    $this->def = $def;
    $this->spa = $spa;
    $this->spd = $spd;
    $this->spe = $spe;
    $this->name = $name;
    $this->slug = $slug;
    $this->id_api = $id_api;
    $this->name_api = $name_api;
    $this->is_default = $is_default;
  }

  /**
   * Get the value of id
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */
  public function setId(int $id)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of weight
   */
  public function getWeight()
  {
    return $this->weight;
  }

  /**
   * Set the value of weight
   *
   * @return  self
   */
  public function setWeight(int $weight)
  {
    $this->weight = $weight;

    return $this;
  }

  /**
   * Get the value of height
   */
  public function getHeight()
  {
    return $this->height;
  }

  /**
   * Set the value of height
   *
   * @return  self
   */
  public function setHeight(int $height)
  {
    $this->height = $height;

    return $this;
  }

  /**
   * Get the value of base_experience
   */
  public function getBase_experience()
  {
    return $this->base_experience;
  }

  /**
   * Set the value of base_experience
   *
   * @return  self
   */
  public function setBase_experience(int $base_experience)
  {
    $this->base_experience = $base_experience;

    return $this;
  }

  /**
   * Get the value of hp
   */
  public function getHp()
  {
    return $this->hp;
  }

  /**
   * Set the value of hp
   *
   * @return  self
   */
  public function setHp(int $hp)
  {
    $this->hp = $hp;

    return $this;
  }

  /**
   * Get the value of atk
   */
  public function getAtk()
  {
    return $this->atk;
  }

  /**
   * Set the value of atk
   *
   * @return  self
   */
  public function setAtk(int $atk)
  {
    $this->atk = $atk;

    return $this;
  }

  /**
   * Get the value of def
   */
  public function getDef()
  {
    return $this->def;
  }

  /**
   * Set the value of def
   *
   * @return  self
   */
  public function setDef(int $def)
  {
    $this->def = $def;

    return $this;
  }

  /**
   * Get the value of spa
   */
  public function getSpa()
  {
    return $this->spa;
  }

  /**
   * Set the value of spa
   *
   * @return  self
   */
  public function setSpa(int $spa)
  {
    $this->spa = $spa;

    return $this;
  }

  /**
   * Get the value of spd
   */
  public function getSpd()
  {
    return $this->spd;
  }

  /**
   * Set the value of spd
   *
   * @return  self
   */
  public function setSpd(int $spd)
  {
    $this->spd = $spd;

    return $this;
  }

  /**
   * Get the value of spe
   */
  public function getSpe()
  {
    return $this->spe;
  }

  /**
   * Set the value of spe
   *
   * @return  self
   */
  public function setSpe(int $spe)
  {
    $this->spe = $spe;

    return $this;
  }

  /**
   * Get the value of name
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */
  public function setName(string $name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of slug
   */
  public function getSlug()
  {
    return $this->slug;
  }

  /**
   * Set the value of slug
   *
   * @return  self
   */
  public function setSlug(string $slug)
  {
    $this->slug = $slug;

    return $this;
  }

  /**
   * Get the value of id_api
   */
  public function getId_api()
  {
    return $this->id_api;
  }

  /**
   * Set the value of id_api
   *
   * @return  self
   */
  public function setId_api(string $id_api)
  {
    $this->id_api = $id_api;

    return $this;
  }

  /**
   * Get the value of name_api
   */
  public function getName_api()
  {
    return $this->name_api;
  }

  /**
   * Set the value of name_api
   *
   * @return  self
   */
  public function setName_api(string $name_api)
  {
    $this->name_api = $name_api;

    return $this;
  }

  /**
   * Get the value of is_default
   */
  public function getIs_default()
  {
    return $this->is_default;
  }

  /**
   * Set the value of is_default
   *
   * @return  self
   */
  public function setIs_default(int $is_default)
  {
    $this->is_default = $is_default;

    return $this;
  }
}
