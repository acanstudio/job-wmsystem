<?php
return [
 'indices' => [
     'mappings' => [
         'book' => [
             "properties"=>  [
                 "description"=>  [
                     "type"=>  "text",
                     "analyzer"=>  "ik_max_word",
                     "search_analyzer"=>  "ik_smart"
                 ],
                 "name"=>  [
                     "type"=>  "text",
                     "analyzer"=>  "ik_max_word",
                     "search_analyzer"=>  "ik_smart"
                 ],
                 "note"=>  [
                     "type"=>  "text",
                     "analyzer"=>  "ik_max_word",
                     "search_analyzer"=>  "ik_smart"
                 ]
             ]
         ]
     ]
 ],
];
