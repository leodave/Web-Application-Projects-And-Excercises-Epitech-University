import { Injectable } from '@nestjs/common';
import { InjectModel } from '@nestjs/mongoose';
import { Users } from './users.model';
import { Model } from 'mongoose';
const bcrypt = require('bcrypt');
const jwt = require('jsonwebtoken');

@Injectable()
export class UsersService {
  constructor(@InjectModel('Users') private UsersModel: Model<Users>) {}

  create(name: String, email: String, pass: String, tkn: String) {
    let password = bcrypt.hashSync(pass, 10);
    let token = jwt.sign({ name: name, email: email }, 'debryune');
    const newUser = new this.UsersModel({ name, email, password, token });
    newUser.save();
    return 'Ok';
  }

  async myprofile(token: String) {
    let user = await this.UsersModel.findOne({ token: token });
    return user;
  }
  async updateprofile(
    token: String,
    name: String,
    email: String,
    pass: String,
  ) {
    let user = await this.UsersModel.findOne({ token: token });
    console.log(user);
    let password = bcrypt.hashSync(pass, 10);
    let tkn = jwt.sign({ name: name, email: email }, 'debryune');

    user.name = name;
    user.email = email;
    user.password = password;
    user.token = tkn;
    user.save();
  }

  async removeweather(token: String, city: String) {
    let users = await this.UsersModel.findOne({ token: token });
    let change = users.components.findIndex((element) => {
      if (element.hasOwnProperty('city')) {
        if (element['city'] == city) {
          return true;
        }
      }
    });
    users.components.splice(change, 1);
    users.save();
  }
  async removereddit(token: String, wor: String) {
    let users = await this.UsersModel.findOne({ token: token });
    let change = users.components.findIndex((element) => {
      if (element.hasOwnProperty('word')) {
        if (element['word'] == wor) {
          return true;
        }
      }
    });
    users.components.splice(change, 1);
    users.save();
  }
  async removeExchange(
    token: String,
    amount: Number,
    from: String,
    to: String,
  ) {
    let users = await this.UsersModel.findOne({ token: token });
    let change = users.components.findIndex((element) => {
      if (
        element.hasOwnProperty('amount') &&
        element.hasOwnProperty('from') &&
        element.hasOwnProperty('to')
      ) {
        if (
          element['amount'] == amount &&
          element['from'] == from &&
          element['to'] == to
        ) {
          return true;
        }
      }
    });
    users.components.splice(change, 1);
    users.save();
  }
  async removedrink(token: String, drink: String) {
    let users = await this.UsersModel.findOne({ token: token });
    let change = users.components.findIndex((element) => {
      if (element.hasOwnProperty('drink')) {
        if (element['drink'] == drink) {
          return true;
        }
      }
    });
    users.components.splice(change, 1);
    users.save();
  }

  async Login(email: string, password: string) {
    const user = await this.UsersModel.findOne({
      email: email,
    });
    let match = bcrypt.compareSync(password, user.password);
    if (match) {
      return { token: user.token, id: user._id };
    } else {
      return 'Login failed';
    }
  }

  async FindUserByToken(token: string) {
    const user = await this.UsersModel.findOne({ token: token });
    return user;
  }
}
