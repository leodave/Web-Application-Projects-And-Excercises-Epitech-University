import {
  Controller,
  Get,
  Post,
  Body,
  Patch,
  Param,
  Delete,
} from '@nestjs/common';
import { MoviesService } from './movies.service';
import { Headers } from '@nestjs/common';
const jwt = require('jsonwebtoken');

@Controller('movies')
export class MoviesController {
  constructor(private readonly MoviesService: MoviesService) {}

  @Post('')
  create(
    @Body('title') title: string,
    @Body('description') description: string,
    @Body('picture') picture: string,
    @Body('price') price: number,
    @Body('rating') rating: number,
    @Body('seat') seat: number,
    @Body('category') category: string,
  ) {
    return this.MoviesService.create(
      title,
      description,
      picture,
      price,
      rating,
      seat,
      category,
    );
  }

  @Get('home')
  findAll(@Headers() headers) {
    console.log(headers.auth);
    let movie = jwt.verify(headers.auth, 'debryune');
    console.log(movie);
    return this.MoviesService.findAll();
  }
  @Get('')
  find() {
    return this.MoviesService.findAll();
  }
  @Get(':id')
  findOne(@Headers() headers, @Param('id') id: string) {
    console.log(headers.auth);
    let movie = jwt.verify(headers.auth, 'debryune');
    console.log(movie);
    return this.MoviesService.findOne(id);
  }

  @Patch(':id')
  update(
    @Param('id') id: string,
    @Body('title') title: string,
    @Body('description') description: string,
    @Body('picture') picture: string,
    @Body('price') price: number,
    @Body('rating') rating: number,
    @Body('seat') seat: number,
    @Body('category') category: string,
  ) {
    return this.MoviesService.update(
      id,
      title,
      description,
      picture,
      price,
      rating,
      seat,
      category,
    );
  }

  @Delete(':id')
  remove(@Param('id') id: string) {
    return this.MoviesService.remove(id);
  }
  @Post('book')
  book(@Body('id') id: string) {
    return this.MoviesService.book(id);
  }
}
