import { Injectable } from '@nestjs/common';
import axios from 'axios';

@Injectable()
export class ExchangeService {
  async convert(from: string, to: string, amount: number) {
    let res = await axios.get(
      'https://api.fastforex.io/convert?api_key=8649ce6793-f3d14e2904-rdkhpl&from=' +
        from +
        '&to=' +
        to +
        '&amount=' +
        amount,
    );
    return {
      to: to,
      from: from,
      amount: amount,
      rate: res.data.result.rate,
      conversion: res.data.result.rate * amount,
    };
  }
}
