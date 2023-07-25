<?php

namespace App\Utilities;
class Constant{
    //Các hằng số dùng chung

    //Order
    const ORDER_STATUS_ReceivedOrder = 1;
    const ORDER_STATUS_UnconfirmOrder = 2;
    const ORDER_STATUS_ConfirmOrder = 3;
    const  ORDER_STATUS_Paid = 4;
    const ORDER_STATUS_Processing = 5;
    const ORDER_STATUS_Shipping = 6;
    const ORDER_STATUS_Finish = 7;
    const  ORDER_STATUS_CancelOrder = 0;
    public static $order_status = [
        self::ORDER_STATUS_ReceivedOrder =>'Đang chờ xác nhận',
        self::ORDER_STATUS_UnconfirmOrder => 'Chưa xác nhận',
        self::ORDER_STATUS_ConfirmOrder => 'Xác nhận',
        self::ORDER_STATUS_Paid =>'Đã thanh toán',
        self::ORDER_STATUS_Processing => 'Đang xử lí',
        self::ORDER_STATUS_Shipping => 'Đang giao',
        self::ORDER_STATUS_Finish => 'Hoàn thành',
        self::ORDER_STATUS_CancelOrder => 'Hủy',
    ];

    // User
    const USER_LEVEL_ADMIN = 1;
    const USER_LEVEL_CUSTOMER = 2;
    const USER_LEVEL_MANAGER = 3;
    public static $user_level = [
        self::USER_LEVEL_ADMIN => 'Admin',
        self::USER_LEVEL_CUSTOMER => 'Khách hàng',
        self::USER_LEVEL_MANAGER => 'Quản trị viên',
    ];

}