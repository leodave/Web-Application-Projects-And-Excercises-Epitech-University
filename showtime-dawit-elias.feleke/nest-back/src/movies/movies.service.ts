import { Injectable } from '@nestjs/common';
import { InjectModel } from '@nestjs/mongoose';
import { Model } from 'mongoose';
import { Movies } from './movies.model';

@Injectable()
export class MoviesService {
  constructor(@InjectModel('Movies') private MoviesModel: Model<Movies>) {}

  create(
    title: string,
    description: string,
    picture: string,
    price: number,
    rating: number,
    seat: number,
    category: string,
  ) {
    const newmovie = new this.MoviesModel({
      title,
      description,
      picture,
      price,
      rating,
      seat,
      category,
    });
    console.log(newmovie);
    newmovie.save();
  }
  async findAll() {
    return await this.MoviesModel.find({});
  }
  async findOne(id: string) {
    return await this.MoviesModel.findOne({ _id: id });
  }
  async update(
    id: string,
    title: string,
    description: string,
    picture: string,
    price: number,
    rating: number,
    seat: number,
    category: string,
  ) {
    const movie = await this.MoviesModel.findOne({ _id: id });
    movie.title = title;
    movie.description = description;
    movie.picture = picture;
    movie.price = price;
    movie.rating = rating;
    movie.seat = seat;
    movie.category = category;
    console.log(
      movie.title,
      movie.description,
      movie.picture,
      movie.price,
      movie.rating,
      movie.seat,
      movie.category,
    );
    movie.save();
  }
  async remove(id: string) {
    return await this.MoviesModel.deleteOne({ _id: id });
    return 'Ok';
  }
  async book(id: string) {
    let res = await this.MoviesModel.findOne({ _id: id });
    let num = res.seat;
    console.log(num);
    let number = num - 1;
    res.seat = number;
    res.save();
    //console.log(number);
  }
}
