<a name="readme-top"></a>
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]




<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://istanbulwebtasarim.pro">
    <img src="https://istanbulwebtasarim.pro/images/istanbul-web-tasarim-logo.webp" alt="İstanbul Web Tasarım" style="width: 40%">
  </a>

<h3 align="center">KDV Calculator Laravel Package</h3>

[![Laravel][Laravel.com]][Laravel-url]
![Packagist Downloads (custom server)][downloads-url]


  <p align="center">
    Laravel için yazılmış KDV Hesaplama paketi.
    <br />
    <a href="https://github.com/theposeidonas/laravel-kdv-calculator"><strong>Dökümantasyon »</strong></a>
    <br />
    <br />
    <a href="https://github.com/theposeidonas/laravel-kdv-calculator">Demo</a>
    ·
    <a href="https://github.com/theposeidonas/laravel-kdv-calculator/issues">Buglar</a>
    ·
    <a href="https://github.com/theposeidonas/laravel-kdv-calculator/issues">İstekler</a>
  </p>
</div>

# Laravel KDV Hesaplayıcı

Bu proje, Laravel için oluşturulmuş kolayca KDV hesaplamanızı sağlayacak bir paket. KDV oranını otomatik olarak .env dosyasından çekebilir veya kendiniz atayabilirsiniz.

### Neden ihtiyaç var?

Kabul edelim, hiçbir developer tek seferde KDV'yi doğru hesaplayamaz. Bu paketi yazarken bile her yerden ayrı ayrı bakıp acaba doğru hesaplıyor mu diye kontrol etmek zorunda kaldım. Çok kolay olduğunu düşünüyor olabilirsiniz, fakat değil. Örneğin KDV %20 ise, 100₺ olan bir ürünün KDV'si 20₺'dir değil mi? Değil işte, 16,67₺...

Bug ve Hataları lütfen Issues kısmından bildirin. (Olabilir bu arada, bir şey yazdım ama doğru hesaplıyor mu diye hala kontrol ediyorum)


<p align="right">(<a href="#readme-top">Başa dön</a>)</p>


## Başlarken

KDV oranının güncel olduğunu kontrol edin. Bu paket default olarak %20 oranla hesaplama yapıyor. PHP^8.0 kullanmanızı öneririm.

### Projenize ekleme

Laravel projenizde terminali açarak şu komutu çalıştırın;

```shell
composer require theposeidonas/laravel-kdv-calculator
```

Eğer gerekiyorsa config dosyasını paylaşmak için şu komutu çalıştırın;

```shell
php artisan vendor:publish --tag=kdv-calculator-config --force
```

Eğer Laravel versiyonunuz eskiyse veya Auto-Discovery kapalıysa, her yerde kullanmak için config/app.php dosyasında 'aliases' kısmına şu kodu ekleyin;

```php
'KDV' => Theposeidonas\LaravelKdvCalculator\Facades\KDV::class,
```

### Konfigürasyon

Kullanım için projenize eklemeyi yaptıktan sonra, .env dosyası içerisinde KDV oranını düzenleyebilirsiniz.
```dotenv
KDV_PERCENTAGE='20'  // %20 oran için 20 girmeniz gerekir
```
<p align="right">(<a href="#readme-top">Başa dön</a>)</p>


## Kullanım

Kullanacağınız Controller içerisine paketi dahil etmeniz gerekiyor;

```php   
use Theposeidonas\LaravelKdvCalculator\Facades\KDV;
```

#### Fonksiyonlar

Kullanabileceğiniz 2 farklı fonksiyon mevcuttur. Toplam tutar verip KDV ve Net tutarı geri alabilirsiniz (KDV dahil tutardan hesaplama yapma) veya NET tutar verip KDV dahil tutarı hesaplayabilirsiniz.

```php  
$result = KDV::calculate(100); // Toplam tutardan hesaplama
echo $result['total']; // (float) 100.00
echo $result['net']; // (float) 83.33
echo $result['kdv']; // (float) 16.67
```
```php  
$result = KDV::calculateNet(83.33); // Net tutardan hesaplama
echo $result['total']; // (float) 100.00
echo $result['net']; // (float) 83.33
echo $result['kdv']; // (float) 16.67
```


### Notlar

Fonksiyon size her zaman bir float şeklinde veri döndürür. Noktadan sonra maksimum 2 basamak geri döner.

### Changelog

#### V1.0.0

**20 Mart 2024**

- Initial Release



<p align="right">(<a href="#readme-top">Başa dön</a>)</p>

<!-- LICENSE -->
## Lisanslama

MIT Lisansı altında dağıtılmaktadır. Daha fazla bilgi için 'LICENSE' dosyasına bakın.

<p align="right">(<a href="#readme-top">Başa dön</a>)</p>



<!-- CONTACT -->
## İletişim

Baran Arda - [@theposeidonas](https://twitter.com/theposeidonas) - info@baranarda.com

Proje Linki: [https://github.com/theposeidonas/laravel-kdv-calculator](https://github.com/theposeidonas/laravel-kdv-calculator)

<p align="right">(<a href="#readme-top">Başa dön</a>)</p>


<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/theposeidonas/laravel-kdv-calculator.svg?style=for-the-badge
[contributors-url]: https://github.com/theposeidonas/laravel-kdv-calculator/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/theposeidonas/laravel-kdv-calculator.svg?style=for-the-badge
[forks-url]: https://github.com/theposeidonas/laravel-kdv-calculator/network/members
[stars-shield]: https://img.shields.io/github/stars/theposeidonas/laravel-kdv-calculator.svg?style=for-the-badge
[stars-url]: https://github.com/theposeidonas/laravel-kdv-calculator/stargazers
[issues-shield]: https://img.shields.io/github/issues/theposeidonas/laravel-kdv-calculator.svg?style=for-the-badge
[issues-url]: https://github.com/theposeidonas/laravel-kdv-calculator/issues
[license-shield]: https://img.shields.io/github/license/theposeidonas/laravel-kdv-calculator.svg?style=for-the-badge
[license-url]: https://github.com/theposeidonas/laravel-kdv-calculator/blob/master/LICENSE
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/in/theposeidonas/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[downloads-url]: https://img.shields.io/packagist/dt/theposeidonas/laravel-kdv-calculator?style=for-the-badge&color=007ec6&cacheSeconds=3600