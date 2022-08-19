import { Injectable } from '@nestjs/common';
import { InjectModel } from '@nestjs/mongoose';
import { Users } from './Users.model';
import { Model } from 'mongoose';
const bodyparser = require('body-parser');
const bcrypt = require('bcrypt');
const jwt = require('jsonwebtoken');

@Injectable()
export class UsersService {
  constructor(@InjectModel('Users') private UsersModel: Model<Users>) {}

  create(name: String, email: String, pass: String, tkn: String) {
    let password = bcrypt.hashSync(pass, 10);
    let token = jwt.sign({ name: name, email: email }, 'debryune');
    console.log(password, token);
    const newUser = new this.UsersModel({ name, email, password, token });
    console.log(newUser);
    newUser.save();
    return 'Ok';
  }
  async findAll() {
    return await this.UsersModel.find({});
  }
  async findOne(id: String) {
    const user = await this.UsersModel.findOne({ _id: id }).populate(
      'favourite',
    );
    return user;
  }
  async update(
    id: String,
    name: String,
    email: String,
    pass: String,
    tkn: String,
  ) {
    let password = bcrypt.hashSync(pass, 10);
    let token = jwt.sign({ name: name, email: email }, 'debryune');
    console.log(password, token);
    const user = await this.UsersModel.findOne({ _id: id });
    user.name = name;
    user.email = email;
    user.password = password;
    user.token = token;
    console.log(user.name, user.email, user.password, user.token);
    user.save();
    return 'Ok';
  }
  async remove(id: String) {
    return await this.UsersModel.deleteOne({ _id: id });
  }
  async addFavourite(id: string, MoviesId: string) {
    const user = await this.UsersModel.findOne({ _id: id });
    console.log(user);
    //user.favourite.push(MoviesId);
    const found = user.favourite.includes(MoviesId);
    if (!found) {
      user.favourite.push(MoviesId);
    } else if (found) {
      let first = user.favourite.indexOf(MoviesId);
      user.favourite.splice(first, 1);
    }
    return user.save();
  }
  async Login(email: string, password: string) {
    console.log(email, password);
    const user = await this.UsersModel.findOne({
      email: email,
    });
    console.log(user);
    let match = bcrypt.compareSync(password, user.password);
    console.log(match);
    if (match) {
      return { token: user.token, id: user._id, fav: user.favourite };
    } else {
      return 'Login failed';
    }
  }
}
