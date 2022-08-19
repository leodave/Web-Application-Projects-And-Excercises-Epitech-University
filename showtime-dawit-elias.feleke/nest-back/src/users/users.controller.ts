import {
  Body,
  Controller,
  Get,
  Post,
  Patch,
  Param,
  Delete,
} from '@nestjs/common';

import { UsersService } from './users.service';

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

  @Get('')
  findAll() {
    return this.UsersService.findAll();
  }

  @Get(':id')
  findOne(@Param('id') id: string) {
    return this.UsersService.findOne(id);
  }

  @Patch(':id')
  update(
    @Param('id') id: string,
    @Body('name') name: String,
    @Body('email') email: String,
    @Body('password') password: String,
    @Body('token') token: String,
  ) {
    return this.UsersService.update(id, name, email, password, token);
  }

  @Delete(':id')
  remove(@Param('id') id: string) {
    return this.UsersService.remove(id);
  }
  @Post('favourite/:id')
  addFavourite(@Param('id') id: string, @Body('moviesId') moviesId: string) {
    return this.UsersService.addFavourite(id, moviesId);
  }
  @Post('Login')
  Login(@Body('email') email: string, @Body('password') password: string) {
    return this.UsersService.Login(email, password);
  }
}
