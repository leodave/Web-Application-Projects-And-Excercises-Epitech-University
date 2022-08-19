import { Injectable } from '@nestjs/common';
import axios from 'axios';

@Injectable()
export class WeatherService {
  create() {
    return 'This action adds a new weather';
  }

  async find(city: string) {
    let res = await axios.get(
      'http://api.weatherapi.com/v1/current.json?key=1658fd1076a74c3181f140915223005&q=' +
        city,
    );
    return res.data;
  }

  findOne(id: number) {
    return `This action returns a #${id} weather`;
  }

  remove(id: number) {
    return `This action removes a #${id} weather`;
  }
}
