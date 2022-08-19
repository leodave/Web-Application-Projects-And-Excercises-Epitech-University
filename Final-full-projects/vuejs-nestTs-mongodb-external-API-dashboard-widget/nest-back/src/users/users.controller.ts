import { Body, Controller, Get, Post, Patch, Param } from '@nestjs/common';
import { UsersService } from './users.service';
import { Headers } from '@nestjs/common';
@Controller('users')
export class UsersController {
  constructor(private readonly UsersService: UsersService) {}

  @Post('')
  create(
    @Body('name') name: String,
    @Body('email') email: String,
    @Body('password') password: String,
    @Body('token') token: String,
  ) {
    return this.UsersService.create(name, email, password, token);
  }
  @Get('myprofile')
  myprofile(@Headers() headers) {
    let token = headers.auth;
    return this.UsersService.myprofile(token);
  }
  @Patch('updateprofile')
  updateprofile(
    @Headers() headers,
    @Body('name') name: string,
    @Body('email') email: string,
    @Body('password') password: string,
  ) {
    let token = headers.auth;
    return this.UsersService.updateprofile(token, name, email, password);
  }
  @Post('/components')
  async AddComponentInUser(
    @Headers() headers,
    @Body('component') component: object,
  ) {
    let token = headers.auth;
    const users = await this.UsersService.FindUserByToken(token);
    console.log(users);

    if (users) {
      users.components.push(component);
      return await users.save();
    } else {
      return 'not found';
    }
  }
  @Get('/components')
  async GetComponentFromUser(@Headers() headers) {
    let token = headers.auth;
    const users = await this.UsersService.FindUserByToken(token);

    if (users) {
      return users.components;
    } else {
      return 'not found';
    }
  }

  @Get('/removeweather/:city')
  removeweather(@Headers() headers, @Param('city') city: string) {
    let token = headers.auth;

    return this.UsersService.removeweather(token, city);
  }
  @Get('/removereddit/:word')
  removereddit(@Headers() headers, @Param('word') word: string) {
    let token = headers.auth;
    return this.UsersService.removereddit(token, word);
  }
  @Get('/removeExchange/:amount/:from/:to')
  removeExchange(
    @Headers() headers,
    @Param('amount') amount: number,
    @Param('from') from: string,
    @Param('to') to: string,
  ) {
    let token = headers.auth;
    return this.UsersService.removeExchange(token, amount, from, to);
  }

  @Get('/removedrink/:drink')
  removedrink(@Headers() headers, @Param('drink') drink: string) {
    let token = headers.auth;
    return this.UsersService.removedrink(token, drink);
  }

  @Post('Login')
  Login(@Body('email') email: string, @Body('password') password: string) {
    return this.UsersService.Login(email, password);
  }
}
