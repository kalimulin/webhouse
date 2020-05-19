/**
 * Created by Anykey on 25.06.2015.
 */
$(function(){
    // Yandex maps
    YMaps.jQuery(function () {
        // Создает экземпляр карты и привязывает его к созданному контейнеру
        var map = new YMaps.Map(YMaps.jQuery("#YMapsID")[0]);

        // Устанавливает начальные параметры отображения карты: центр карты и коэффициент масштабирования
        var point = new YMaps.GeoPoint(37.64, 55.76);
        var point2 = new YMaps.GeoPoint(37.65336553, 55.72528543);
        map.setCenter(point2, 16);

        // Создает стиль
        var s = new YMaps.Style();

        // Создает стиль значка метки
        s.iconStyle = new YMaps.IconStyle();

        s.iconStyle.href = "images/layout/metka.png";
        s.iconStyle.size = new YMaps.Point(74, 59);
        s.iconStyle.offset = new YMaps.Point(-9, -39);

        var placemark = new YMaps.Placemark(point2, {style: s});
        map.addOverlay(placemark);
    });
})