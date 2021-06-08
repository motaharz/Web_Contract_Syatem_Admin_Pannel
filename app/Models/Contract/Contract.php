<?php

namespace App\Models\Contract;


use App\Models\Contractor\Contractor;
use App\Models\Shop\Shop;

class Contract
{
    private $id;
    private $contractorId;
    private $tantou_id;
    private $status;
    private $note;
    private $ringiNo;
    private $updateDate;
    private $updateUserId;
    private $insertDate;
    private $insertUserId;
    private $deleteFlag;
    private $contractProduct = array();
    private $contractorDetail;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getContractorId()
    {
        return $this->contractorId;
    }

    /**
     * @param mixed $contractorId
     */
    public function setContractorId($contractorId): void
    {
        $this->contractorId = $contractorId;
    }

    /**
     * @return mixed
     */
    public function getTantouId()
    {
        return $this->tantou_id;
    }

    /**
     * @param mixed $tantou_id
     */
    public function setTantouId($tantou_id): void
    {
        $this->tantou_id = $tantou_id;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note): void
    {
        $this->note = $note;
    }

    /**
     * @return mixed
     */
    public function getRingiNo()
    {
        return $this->ringiNo;
    }

    /**
     * @param mixed $ringiNo
     */
    public function setRingiNo($ringiNo): void
    {
        $this->ringiNo = $ringiNo;
    }

    /**
     * @return mixed
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * @param mixed $updateDate
     */
    public function setUpdateDate($updateDate): void
    {
        $this->updateDate = $updateDate;
    }

    /**
     * @return mixed
     */
    public function getUpdateUserId()
    {
        return $this->updateUserId;
    }

    /**
     * @param mixed $updateUserId
     */
    public function setUpdateUserId($updateUserId): void
    {
        $this->updateUserId = $updateUserId;
    }

    /**
     * @return mixed
     */
    public function getInsertDate()
    {
        return $this->insertDate;
    }

    /**
     * @param mixed $insertDate
     */
    public function setInsertDate($insertDate): void
    {
        $this->insertDate = $insertDate;
    }

    /**
     * @return mixed
     */
    public function getInsertUserId()
    {
        return $this->insertUserId;
    }

    /**
     * @param mixed $insertUserId
     */
    public function setInsertUserId($insertUserId): void
    {
        $this->insertUserId = $insertUserId;
    }

    /**
     * @return mixed
     */
    public function getDeleteFlag()
    {
        return $this->deleteFlag;
    }

    /**
     * @param mixed $deleteFlag
     */
    public function setDeleteFlag($deleteFlag): void
    {
        $this->deleteFlag = $deleteFlag;
    }

    /**
     * @return array
     */
    public function getContractProduct(): array
    {
        return $this->contractProduct;
    }

    /**
     * @param array $contractProduct
     */
    public function setContractProduct(array $contractProduct): void
    {
        $this->contractProduct[] = $contractProduct;
    }

    /**
     * @return Contractor
     */
    public function getContractorDetail(): Contractor
    {
        return $this->contractorDetail;
    }

    /**
     * @param Contractor $contractorDetail
     */
    public function setContractorDetail(Contractor $contractorDetail): void
    {
        $this->contractorDetail = $contractorDetail;
    }
}