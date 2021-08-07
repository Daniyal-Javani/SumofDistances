## Sum Of Distances
An api to calculate sum of two distances with different units and return the result in selected unit

---
### How to use
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __./vendor/bin/sail up__
- Open __[http://localhost/doc](http://localhost/doc)__

---

### Modified Files
[app/Distance/DistanceFactory.php](app/Distance/DistanceFactory.php)

[app/Distance/DistanceInterface.php](app/Distance/DistanceInterface.php)

[app/Distance/MeterDistance.php](app/Distance/MeterDistance.php)

[app/Distance/Strategies/CalculatorStrategyContexts.php](app/Distance/Strategies/CalculatorStrategyContexts.php)

[app/Distance/Strategies/CalculatorStrategyInterface.php](app/Distance/Strategies/CalculatorStrategyInterface.php)

[app/Distance/Strategies/MeterCalculatorStrategy.php](app/Distance/Strategies/MeterCalculatorStrategy.php)

[app/Distance/Strategies/YardCalculatorStrategy.php](app/Distance/Strategies/YardCalculatorStrategy.php)

[app/Distance/YardDistance.php](app/Distance/YardDistance.php)

[app/Http/Controllers/DistanceCalculatorController.php](app/Http/Controllers/DistanceCalculatorController.php)

[app/Http/Requests/CalculateDistancesRequest.php](app/Http/Requests/CalculateDistancesRequest.php)

[public/doc.yaml](public/doc.yaml)

[resources/views/swagger.blade.php](resources/views/swagger.blade.php)

[routes/api.php](routes/api.php)

[routes/web.php](routes/web.php)

[tests/Feature/DistanceCalculatorTest.php](tests/Feature/DistanceCalculatorTest.php)

