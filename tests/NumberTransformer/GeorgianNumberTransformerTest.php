<?php

namespace NumToWords\NumberTransformer;

class GeorgianNumberTransformerTest extends NumberTransformerTest
{
    public function setUp()
    {
        $this->numberTransformer = new GeorgianNumberTransformer();
    }

    public function providerItConvertsNumbersToWords()
    {
        return [
            [0,'ნული'],
            [1,'ერთი'],
            [2,'ორი'],
            [3,'სამი'],
            [4,'ოთხი'],
            [5,'ხუთი'],
            [6,'ექვსი'],
            [7,'შვიდი'],
            [8,'რვა'],
            [9,'ცხრა'],
            [10,'ათი'],
            [11,'თერთმეტი'],
            [12,'თორმეტი'],
            [13,'ცამეტი'],
            [14,'თოთხმეტი'],
            [15,'თხუთმეტი'],
            [16,'თექვსმეტი'],
            [17,'ჩვიდმეტი'],
            [18,'თვრამეტი'],
            [19,'ცხრამეტი'],
            [20,'ოცი'],
            [21,'ოცდაერთი'],
            [22,'ოცდაორი'],
            [23,'ოცდასამი'],
            [24,'ოცდაოთხი'],
            [25,'ოცდახუთი'],
            [26,'ოცდაექვსი'],
            [27,'ოცდაშვიდი'],
            [28,'ოცდარვა'],
            [29,'ოცდაცხრა'],
            [30,'ოცდაათი'],
            [31,'ოცდათერთმეტი'],
            [32,'ოცდათორმეტი'],
            [33,'ოცდაცამეტი'],
            [34,'ოცდათოთხმეტი'],
            [35,'ოცდათხუთმეტი'],
            [36,'ოცდათექვსმეტი'],
            [37,'ოცდაჩვიდმეტი'],
            [38,'ოცდათვრამეტი'],
            [39,'ოცდაცხრამეტი'],
            [40,'ორმოცი'],
            [41,'ორმოცდაერთი'],
            [42,'ორმოცდაორი'],
            [43,'ორმოცდასამი'],
            [44,'ორმოცდაოთხი'],
            [45,'ორმოცდახუთი'],
            [46,'ორმოცდაექვსი'],
            [47,'ორმოცდაშვიდი'],
            [48,'ორმოცდარვა'],
            [49,'ორმოცდაცხრა'],
            [50,'ორმოცდაათი'],
            [51,'ორმოცდათერთმეტი'],
            [52,'ორმოცდათორმეტი'],
            [53,'ორმოცდაცამეტი'],
            [54,'ორმოცდათოთხმეტი'],
            [55,'ორმოცდათხუთმეტი'],
            [56,'ორმოცდათექვსმეტი'],
            [57,'ორმოცდაჩვიდმეტი'],
            [58,'ორმოცდათვრამეტი'],
            [59,'ორმოცდაცხრამეტი'],
            [60,'სამოცი'],
            [61,'სამოცდაერთი'],
            [62,'სამოცდაორი'],
            [63,'სამოცდასამი'],
            [64,'სამოცდაოთხი'],
            [65,'სამოცდახუთი'],
            [66,'სამოცდაექვსი'],
            [67,'სამოცდაშვიდი'],
            [68,'სამოცდარვა'],
            [69,'სამოცდაცხრა'],
            [70,'სამოცდაათი'],
            [71,'სამოცდათერთმეტი'],
            [72,'სამოცდათორმეტი'],
            [73,'სამოცდაცამეტი'],
            [74,'სამოცდათოთხმეტი'],
            [75,'სამოცდათხუთმეტი'],
            [76,'სამოცდათექვსმეტი'],
            [77,'სამოცდაჩვიდმეტი'],
            [78,'სამოცდათვრამეტი'],
            [79,'სამოცდაცხრამეტი'],
            [80,'ოთხმოცი'],
            [81,'ოთხმოცდაერთი'],
            [82,'ოთხმოცდაორი'],
            [83,'ოთხმოცდასამი'],
            [84,'ოთხმოცდაოთხი'],
            [85,'ოთხმოცდახუთი'],
            [86,'ოთხმოცდაექვსი'],
            [87,'ოთხმოცდაშვიდი'],
            [88,'ოთხმოცდარვა'],
            [89,'ოთხმოცდაცხრა'],
            [90,'ოთხმოცდაათი'],
            [91,'ოთხმოცდათერთმეტი'],
            [92,'ოთხმოცდათორმეტი'],
            [93,'ოთხმოცდაცამეტი'],
            [94,'ოთხმოცდათოთხმეტი'],
            [95,'ოთხმოცდათხუთმეტი'],
            [96,'ოთხმოცდათექვსმეტი'],
            [97,'ოთხმოცდაჩვიდმეტი'],
            [98,'ოთხმოცდათვრამეტი'],
            [99,'ოთხმოცდაცხრამეტი'],
            [100,'ასი'],
            [10403,'ათი ათას ოთხას სამი'],
            [190455576,'ას ოთხმოცდაათი მილიონ ოთხას ორმოცდათხუთმეტი ათას ხუთას სამოცდათექვსმეტი'],
            [1.5,'ერთი მთელი ხუთი მეათედი'],
            [3.75,'სამი მთელი სამოცდათხუთმეტი მეასედი'],
            [7.125,'შვიდი მთელი ას ოცდახუთი მეათასედი'],
            [12.1875,'თორმეტი მთელი ათას რვაას სამოცდათხუთმეტი მეათიათასედი'],
            [19.78125,'ცხრამეტი მთელი სამოცდათვრამეტი ათას ას ოცდახუთი მეასიათასედი'],
        ];
    }
}
