<?php

namespace Sierra\Routes;

class Items extends BaseRoutes
{
    /**
     * @param $bibId
     * @param array $opts could be any param from /v4/items
     *   examples:
     *  'limit'
     *  'offset'
     *  'location'
     *  'status'
     *
     * @return array|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Sierra\Errors\SierraAPIClientException
     * @throws \Sierra\Errors\SierraAuthorizationException
     * @see https://sandbox.iii.com/iii/sierra-api/swagger/index.html#!/items/Get_a_list_of_items_get_0
     */
    public function getItemsByBibId($bibId, array $opts = [])
    {
        $args = $this->prepareArguments(
            [
                'bibIds' => $bibId
            ],
            $opts
        );
        return $this->doGetRequest('items', $args);
    }
}
