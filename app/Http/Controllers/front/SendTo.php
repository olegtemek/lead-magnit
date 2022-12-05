<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class SendTo extends Controller
{
    public function send(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'number' => 'required'
        ]);

        $name = $request->name;
        $number = $request->number;

        // Lead

        // Link to crm.contact.add.json
        $queryURL = '';


        // формируем параметры для создания лида	
        $queryData = http_build_query(array(
            "fields" => array(
                "NAME" => $name,
                "TITLE" => 'Новый пользователь(lead)',
                "STATUS_ID" => "NEW",
                "PHONE" => array(array("VALUE" => $number, "VALUE_TYPE" => "WORK")),
            ),

        ));

        // отправляем запрос в Б24 и обрабатываем ответ
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POST => 1,
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $queryURL,
            CURLOPT_POSTFIELDS => $queryData,
        ));
        $result = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($result, 1);

        $leadId = $result['result'];

        // если произошла какая-то ошибка - выведем её
        if (array_key_exists('error', $result)) {
            return response()->json([
                'status' => 403,
            ]);
        }


        //link to crm.deal.add.json

        $queryURL = '';

        $queryData = http_build_query(array(
            "fields" => array(
                "CONTACT_ID" => $leadId,
                "ASSIGNED_BY_ID" => 85,
                "TITLE" => 'Заявка с leadmagnit.kz', //
                "STATUS_ID" => "NEW", // статус лида
                "UTM_SOURCE" => $request->post('utm_source'),
                "UTM_MEDIUM" => $request->post('utm_medium'),
                "UTM_CAMPAING" => $request->post('utm_campaign'),
                "UTM_CONTENT" => $request->post('utm_content'),
                "UTM_TERM" => $request->post('utm_term'),
            ),
        ));

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POST => 1,
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $queryURL,
            CURLOPT_POSTFIELDS => $queryData,
        ));
        $result = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($result, 1);


        return response()->json([
            'status' => 200,
            'data' => 'Name: ' . $name . ' || ' . 'Number: ' . $number
        ]);
    }
}
