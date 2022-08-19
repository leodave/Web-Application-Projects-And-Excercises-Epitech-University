import { Injectable } from '@nestjs/common';
import axios from 'axios';

@Injectable()
export class DrinkService {
  async Hello() {
    let res = await axios.get(
      'https://www.thecocktaildb.com/api/json/v1/1/search.php?s=apple',
    );
    return res.data;
  }
  async Find(ingredient: string) {
    let res = await axios.get(
      'https://www.thecocktaildb.com/api/json/v1/1/search.php?s=' + ingredient,
    );
    return res.data;
  }
}
