import { Controller, Get, Param } from '@nestjs/common';
import { ExchangeService } from './exchange.service';

@Controller('exchange')
export class ExchangeController {
  constructor(private readonly exchangeService: ExchangeService) {}

  @Get(':from/:to/:amount')
  convert(
    @Param('from') from: string,
    @Param('to') to: string,
    @Param('amount') amount: number,
  ) {
    return this.exchangeService.convert(from, to, amount);
  }
}
