import { Controller, Get, Param } from '@nestjs/common';
import { DrinkService } from './drink.service';

@Controller('drinks')
export class AppController {
  constructor(private readonly DrinkService: DrinkService) {}

  @Get('')
  Hello() {
    return this.DrinkService.Hello();
  }
  @Get(':ingredient')
  Find(@Param('ingredient') ingredient: string) {
    return this.DrinkService.Find(ingredient);
  }
}
