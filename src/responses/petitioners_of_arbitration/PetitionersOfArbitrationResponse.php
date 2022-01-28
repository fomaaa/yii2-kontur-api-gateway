<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 15:16
 */

namespace mfteam\kontur\responses\petitioners_of_arbitration;

use mfteam\kontur\responses\AbstractCompanyResponse;

/**
 * Статистика по истцам в арбитраже
 *
 * Class PetitionersOfArbitrationResponse
 * @package mfteam\kontur\responses\petitioners_of_arbitration
 */
class PetitionersOfArbitrationResponse extends AbstractCompanyResponse
{
    /**
     * @var PetitionerOfArbitrationCollection|null
     */
    protected $petitioners;

    /**
     * @return PetitionerOfArbitrationCollection|null
     */
    public function getPetitioners(): ?PetitionerOfArbitrationCollection
    {
        return $this->petitioners;
    }

    /**
     * @param array $data
     */
    public function setPetitioners(array $data = []): void
    {
        $this->petitioners = new PetitionerOfArbitrationCollection($data);
    }
}
