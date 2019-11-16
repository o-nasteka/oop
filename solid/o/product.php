<?php


class Product
{
    /**
     * @var string
     */
    private $logger;

    public function __construct(ILoger $logger)
    {
        $this->logger = $logger;
    }


    /**
     * @param $price
     */
    public function setPrice($price)
    {
        try{
            $this->price = $price;
            // save price to DB
        } catch(Exception $e){
//        } catch(DbException $e){
            $this->logger->log($e->getMessage());
        }

    }


}